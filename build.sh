#!/bin/bash
NAMESPACE=Payments
NAME=${NAMESPACE,,}

curl --compressed https://developers.klarna.com/api/specs/$NAME.json > $NAME.json

# Fix security headers schema.
echo "$( jq '.security = [{ "basicAuth": [] }]' $NAME.json )" > $NAME.json
echo "$( jq '.securityDefinitions = { "basicAuth": { "type": "basic" }}' $NAME.json )" > $NAME.json

# Generate the client.
ARGS="-c $NAME.config.json -i $NAME.json -g php -o ../$NAME --skip-validate-spec --git-host=gitlab.com --git-repo-id=php-klarna-$NAME --git-user-id=tuutti --global-property apiTests=false"

if [ -n "$CI" ]; then
  java -jar /opt/openapi-generator/modules/openapi-generator-cli/target/openapi-generator-cli.jar generate $ARGS
else
  openapi-generator-cli generate $ARGS
fi

# Convert all Models to extend and use same interface.
for EXT in php md
do
  find . -type f -name "*.$EXT" -exec sed -i 's/\<interface ModelInterface\>/interface ModelInterface extends \\Klarna\\Model\\ModelInterface/g' {} +
  find . -type f -name "*.$EXT" -exec sed -i 's|Klarna\\Model\\'"$NAMESPACE"'\\ModelInterface|Klarna\\Model\\ModelInterface|g' {} +
done

# Add base dependency without having to use composer.
echo "$( jq --indent 4 '.require += {"tuutti/php-klarna-base": "~1.0"}' composer.json )" > composer.json

for FILE in ApiException Configuration HeaderSelector ObjectSerializer
do
  rm src/$FILE.php || true
  # Convert all code to use same base classes.
  find . -type f -name "*" -exec sed -i 's|Klarna\\'"$NAMESPACE"'\\'"$FILE"'|Klarna\\'"$FILE"'|g' {} +
done
