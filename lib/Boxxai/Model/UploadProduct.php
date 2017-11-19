<?php
/**
 * UploadProduct
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
 * UploadProduct Class Doc Comment
 *
 * @category    Class */
 // @description Upload data product schema
/**
 * @package     Boxxai
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UploadProduct implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'upload_product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'productid' => 'string',
        'properties' => 'map[string,string]'
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
        'productid' => 'productid',
        'properties' => 'properties'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'productid' => 'setProductid',
        'properties' => 'setProperties'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'productid' => 'getProductid',
        'properties' => 'getProperties'
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
        $this->container['productid'] = isset($data['productid']) ? $data['productid'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['productid'] === null) {
            $invalid_properties[] = "'productid' can't be null";
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
        if ($this->container['productid'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets productid
     * @return string
     */
    public function getProductid()
    {
        return $this->container['productid'];
    }

    /**
     * Sets productid
     * @param string $productid
     * @return $this
     */
    public function setProductid($productid)
    {
        $this->container['productid'] = $productid;

        return $this;
    }

    /**
     * Gets properties
     * @return map[string,string]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     * @param map[string,string] $properties
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

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


