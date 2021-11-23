<?php
/**
 * CategoryDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier API
 *
 * Supplier API description... <br /><br /> Open [OpenAPI.json](doc.json).
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.30
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Emesa\PartnerPlatform\Model;

use \ArrayAccess;
use \Emesa\PartnerPlatform\ObjectSerializer;

/**
 * CategoryDto Class Doc Comment
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CategoryDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'market_category_id' => 'string',
'parent_market_category_id' => 'string',
'name' => 'string',
'can_contain_products' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'market_category_id' => null,
'parent_market_category_id' => null,
'name' => null,
'can_contain_products' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'market_category_id' => 'marketCategoryId',
'parent_market_category_id' => 'parentMarketCategoryId',
'name' => 'name',
'can_contain_products' => 'canContainProducts'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'market_category_id' => 'setMarketCategoryId',
'parent_market_category_id' => 'setParentMarketCategoryId',
'name' => 'setName',
'can_contain_products' => 'setCanContainProducts'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'market_category_id' => 'getMarketCategoryId',
'parent_market_category_id' => 'getParentMarketCategoryId',
'name' => 'getName',
'can_contain_products' => 'getCanContainProducts'    ];

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
        return self::$swaggerModelName;
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
        $this->container['market_category_id'] = isset($data['market_category_id']) ? $data['market_category_id'] : null;
        $this->container['parent_market_category_id'] = isset($data['parent_market_category_id']) ? $data['parent_market_category_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['can_contain_products'] = isset($data['can_contain_products']) ? $data['can_contain_products'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['market_category_id'] === null) {
            $invalidProperties[] = "'market_category_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['can_contain_products'] === null) {
            $invalidProperties[] = "'can_contain_products' can't be null";
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
     * Gets market_category_id
     *
     * @return string
     */
    public function getMarketCategoryId()
    {
        return $this->container['market_category_id'];
    }

    /**
     * Sets market_category_id
     *
     * @param string $market_category_id market_category_id
     *
     * @return $this
     */
    public function setMarketCategoryId($market_category_id)
    {
        $this->container['market_category_id'] = $market_category_id;

        return $this;
    }

    /**
     * Gets parent_market_category_id
     *
     * @return string
     */
    public function getParentMarketCategoryId()
    {
        return $this->container['parent_market_category_id'];
    }

    /**
     * Sets parent_market_category_id
     *
     * @param string $parent_market_category_id parent_market_category_id
     *
     * @return $this
     */
    public function setParentMarketCategoryId($parent_market_category_id)
    {
        $this->container['parent_market_category_id'] = $parent_market_category_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets can_contain_products
     *
     * @return bool
     */
    public function getCanContainProducts()
    {
        return $this->container['can_contain_products'];
    }

    /**
     * Sets can_contain_products
     *
     * @param bool $can_contain_products can_contain_products
     *
     * @return $this
     */
    public function setCanContainProducts($can_contain_products)
    {
        $this->container['can_contain_products'] = $can_contain_products;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
