<?php
/**
 * UploadTransactionRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Boxxai
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * boxx client
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Boxxai\Model;

use \ArrayAccess;

/**
 * UploadTransactionRequest Class Doc Comment
 *
 * @category    Class */
 // @description upload transaction request
/**
 * @package     Boxxai
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UploadTransactionRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'upload_transaction_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_id' => 'string',
        'access_token' => 'string',
        'data' => '\Boxxai\Model\UploadTransaction[]',
        'data_format' => 'map[string,string]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'client_id' => 'client_id',
        'access_token' => 'access_token',
        'data' => 'data',
        'data_format' => 'data_format'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'access_token' => 'setAccessToken',
        'data' => 'setData',
        'data_format' => 'setDataFormat'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'access_token' => 'getAccessToken',
        'data' => 'getData',
        'data_format' => 'getDataFormat'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['access_token'] = isset($data['access_token']) ? $data['access_token'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['data_format'] = isset($data['data_format']) ? $data['data_format'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['client_id'] === null) {
            $invalid_properties[] = "'client_id' can't be null";
        }
        if ($this->container['access_token'] === null) {
            $invalid_properties[] = "'access_token' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalid_properties[] = "'data' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['client_id'] === null) {
            return false;
        }
        if ($this->container['access_token'] === null) {
            return false;
        }
        if ($this->container['data'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     * @param string $client_id client id of the user
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets access_token
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     * @param string $access_token access token of the user
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets data
     * @return \Boxxai\Model\UploadTransaction[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     * @param \Boxxai\Model\UploadTransaction[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets data_format
     * @return map[string,string]
     */
    public function getDataFormat()
    {
        return $this->container['data_format'];
    }

    /**
     * Sets data_format
     * @param map[string,string] $data_format
     * @return $this
     */
    public function setDataFormat($data_format)
    {
        $this->container['data_format'] = $data_format;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Boxxai\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Boxxai\ObjectSerializer::sanitizeForSerialization($this));
    }
}


