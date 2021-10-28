<?php
/**
 * ProductDto
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
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
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
 * ProductDto Class Doc Comment
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'string',
'ean' => 'string',
'brand' => 'string',
'category_id' => 'string',
'retail_price_in_cents' => 'int',
'main_image_url' => 'string',
'translations' => '\Emesa\PartnerPlatform\Model\ProductContentTranslationsDto',
'extra_image_urls' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_id' => null,
'ean' => null,
'brand' => null,
'category_id' => null,
'retail_price_in_cents' => null,
'main_image_url' => null,
'translations' => null,
'extra_image_urls' => null    ];

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
        'product_id' => 'productId',
'ean' => 'ean',
'brand' => 'brand',
'category_id' => 'categoryId',
'retail_price_in_cents' => 'retailPriceInCents',
'main_image_url' => 'mainImageUrl',
'translations' => 'translations',
'extra_image_urls' => 'extraImageUrls'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
'ean' => 'setEan',
'brand' => 'setBrand',
'category_id' => 'setCategoryId',
'retail_price_in_cents' => 'setRetailPriceInCents',
'main_image_url' => 'setMainImageUrl',
'translations' => 'setTranslations',
'extra_image_urls' => 'setExtraImageUrls'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
'ean' => 'getEan',
'brand' => 'getBrand',
'category_id' => 'getCategoryId',
'retail_price_in_cents' => 'getRetailPriceInCents',
'main_image_url' => 'getMainImageUrl',
'translations' => 'getTranslations',
'extra_image_urls' => 'getExtraImageUrls'    ];

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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['retail_price_in_cents'] = isset($data['retail_price_in_cents']) ? $data['retail_price_in_cents'] : null;
        $this->container['main_image_url'] = isset($data['main_image_url']) ? $data['main_image_url'] : null;
        $this->container['translations'] = isset($data['translations']) ? $data['translations'] : null;
        $this->container['extra_image_urls'] = isset($data['extra_image_urls']) ? $data['extra_image_urls'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string $ean ean
     *
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string $category_id category_id
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets retail_price_in_cents
     *
     * @return int
     */
    public function getRetailPriceInCents()
    {
        return $this->container['retail_price_in_cents'];
    }

    /**
     * Sets retail_price_in_cents
     *
     * @param int $retail_price_in_cents retail_price_in_cents
     *
     * @return $this
     */
    public function setRetailPriceInCents($retail_price_in_cents)
    {
        $this->container['retail_price_in_cents'] = $retail_price_in_cents;

        return $this;
    }

    /**
     * Gets main_image_url
     *
     * @return string
     */
    public function getMainImageUrl()
    {
        return $this->container['main_image_url'];
    }

    /**
     * Sets main_image_url
     *
     * @param string $main_image_url main_image_url
     *
     * @return $this
     */
    public function setMainImageUrl($main_image_url)
    {
        $this->container['main_image_url'] = $main_image_url;

        return $this;
    }

    /**
     * Gets translations
     *
     * @return \Emesa\PartnerPlatform\Model\ProductContentTranslationsDto
     */
    public function getTranslations()
    {
        return $this->container['translations'];
    }

    /**
     * Sets translations
     *
     * @param \Emesa\PartnerPlatform\Model\ProductContentTranslationsDto $translations translations
     *
     * @return $this
     */
    public function setTranslations($translations)
    {
        $this->container['translations'] = $translations;

        return $this;
    }

    /**
     * Gets extra_image_urls
     *
     * @return string[]
     */
    public function getExtraImageUrls()
    {
        return $this->container['extra_image_urls'];
    }

    /**
     * Sets extra_image_urls
     *
     * @param string[] $extra_image_urls extra_image_urls
     *
     * @return $this
     */
    public function setExtraImageUrls($extra_image_urls)
    {
        $this->container['extra_image_urls'] = $extra_image_urls;

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
