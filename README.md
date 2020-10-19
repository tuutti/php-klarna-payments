# php-klarna-payments

API spec

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 7.2 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/tuutti/php-klarna-payments.git"
    }
  ],
  "require": {
    "tuutti/php-klarna-payments": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/php-klarna-payments/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\Payments\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization_token = 'authorization_token_example'; // string | 

try {
    $apiInstance->cancelAuthorization($authorization_token);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelAuthorization: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.klarna.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrdersApi* | [**cancelAuthorization**](docs/Api/OrdersApi.md#cancelauthorization) | **DELETE** /payments/v1/authorizations/{authorizationToken} | Cancel an existing authorization
*OrdersApi* | [**createOrder**](docs/Api/OrdersApi.md#createorder) | **POST** /payments/v1/authorizations/{authorizationToken}/order | Create a new order
*OrdersApi* | [**purchaseToken**](docs/Api/OrdersApi.md#purchasetoken) | **POST** /payments/v1/authorizations/{authorizationToken}/customer-token | Generate a consumer token
*SessionsApi* | [**createCreditSession**](docs/Api/SessionsApi.md#createcreditsession) | **POST** /payments/v1/sessions | Create a new credit session
*SessionsApi* | [**readCreditSession**](docs/Api/SessionsApi.md#readcreditsession) | **GET** /payments/v1/sessions/{session_id} | Read an existing credit session
*SessionsApi* | [**updateCreditSession**](docs/Api/SessionsApi.md#updatecreditsession) | **POST** /payments/v1/sessions/{session_id} | Update an existing credit session


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [AssetUrls](docs/Model/AssetUrls.md)
 - [Attachment](docs/Model/Attachment.md)
 - [AuthorizedPaymentMethod](docs/Model/AuthorizedPaymentMethod.md)
 - [CreateOrderRequest](docs/Model/CreateOrderRequest.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerTokenCreationRequest](docs/Model/CustomerTokenCreationRequest.md)
 - [CustomerTokenCreationResponse](docs/Model/CustomerTokenCreationResponse.md)
 - [ErrorV2](docs/Model/ErrorV2.md)
 - [Instant](docs/Model/Instant.md)
 - [MerchantSession](docs/Model/MerchantSession.md)
 - [MerchantUrls](docs/Model/MerchantUrls.md)
 - [Options](docs/Model/Options.md)
 - [Order](docs/Model/Order.md)
 - [OrderLine](docs/Model/OrderLine.md)
 - [PaymentMethodCategory](docs/Model/PaymentMethodCategory.md)
 - [ProductIdentifiers](docs/Model/ProductIdentifiers.md)
 - [Session](docs/Model/Session.md)


## Documentation For Authorization



## basicAuth


- **Type**: HTTP basic authentication


## Author



