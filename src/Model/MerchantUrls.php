<?php
/**
 * MerchantUrls
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Klarna\Payments
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klarna Payments API V1
 *
 * API spec
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Klarna\Payments\Model;

use \ArrayAccess;
use \Klarna\ObjectSerializer;

/**
 * MerchantUrls Class Doc Comment
 *
 * @category Class
 * @package  Klarna\Payments
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MerchantUrls implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'merchant_urls';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'confirmation' => 'string',
        'notification' => 'string',
        'push' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'confirmation' => null,
        'notification' => null,
        'push' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'confirmation' => 'confirmation',
        'notification' => 'notification',
        'push' => 'push'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'confirmation' => 'setConfirmation',
        'notification' => 'setNotification',
        'push' => 'setPush'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'confirmation' => 'getConfirmation',
        'notification' => 'getNotification',
        'push' => 'getPush'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['confirmation'] = $data['confirmation'] ?? null;
        $this->container['notification'] = $data['notification'] ?? null;
        $this->container['push'] = $data['push'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['confirmation'] === null) {
            $invalidProperties[] = "'confirmation' can't be null";
        }
        if ((mb_strlen($this->container['confirmation']) > 2000)) {
            $invalidProperties[] = "invalid value for 'confirmation', the character length must be smaller than or equal to 2000.";
        }

        if ((mb_strlen($this->container['confirmation']) < 0)) {
            $invalidProperties[] = "invalid value for 'confirmation', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['notification']) && (mb_strlen($this->container['notification']) > 2000)) {
            $invalidProperties[] = "invalid value for 'notification', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['notification']) && (mb_strlen($this->container['notification']) < 0)) {
            $invalidProperties[] = "invalid value for 'notification', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['push']) && (mb_strlen($this->container['push']) > 2000)) {
            $invalidProperties[] = "invalid value for 'push', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['push']) && (mb_strlen($this->container['push']) < 0)) {
            $invalidProperties[] = "invalid value for 'push', the character length must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets confirmation
     *
     * @return string
     */
    public function getConfirmation()
    {
        return $this->container['confirmation'];
    }

    /**
     * Sets confirmation
     *
     * @param string $confirmation URL of the merchant confirmation page. The consumer will be redirected back to the confirmation page if the consumer is sent to the redirect URL after placing the order. Insert {session.id} and/or {order.id} as placeholder to connect either of those IDs to the URL(max 2000 characters).
     *
     * @return self
     */
    public function setConfirmation($confirmation)
    {
        if ((mb_strlen($confirmation) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $confirmation when calling MerchantUrls., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($confirmation) < 0)) {
            throw new \InvalidArgumentException('invalid length for $confirmation when calling MerchantUrls., must be bigger than or equal to 0.');
        }

        $this->container['confirmation'] = $confirmation;

        return $this;
    }

    /**
     * Gets notification
     *
     * @return string|null
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     *
     * @param string|null $notification URL for notifications on pending orders. Insert {session.id} and/or {order.id} as placeholder to connect either of those IDs to the URL (max 2000 characters).
     *
     * @return self
     */
    public function setNotification($notification)
    {
        if (!is_null($notification) && (mb_strlen($notification) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $notification when calling MerchantUrls., must be smaller than or equal to 2000.');
        }
        if (!is_null($notification) && (mb_strlen($notification) < 0)) {
            throw new \InvalidArgumentException('invalid length for $notification when calling MerchantUrls., must be bigger than or equal to 0.');
        }

        $this->container['notification'] = $notification;

        return $this;
    }

    /**
     * Gets push
     *
     * @return string|null
     */
    public function getPush()
    {
        return $this->container['push'];
    }

    /**
     * Sets push
     *
     * @param string|null $push URL that will be requested when an order is completed. Should be different than checkout and confirmation URLs. Insert {session.id} and/or {order.id} as placeholder to connect either of those IDs to the URL (max 2000 characters).
     *
     * @return self
     */
    public function setPush($push)
    {
        if (!is_null($push) && (mb_strlen($push) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $push when calling MerchantUrls., must be smaller than or equal to 2000.');
        }
        if (!is_null($push) && (mb_strlen($push) < 0)) {
            throw new \InvalidArgumentException('invalid length for $push when calling MerchantUrls., must be bigger than or equal to 0.');
        }

        $this->container['push'] = $push;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


