<?php
/**
 * ProductContentTranslationsDto
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
 * OpenAPI spec version: 1.1.12
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
 * ProductContentTranslationsDto Class Doc Comment
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductContentTranslationsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductContentTranslationsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nl_nl' => '\Emesa\PartnerPlatform\Model\ProductContentDto',
'nl_be' => 'AllOfProductContentTranslationsDtoNlBe',
'fr_be' => 'AllOfProductContentTranslationsDtoFrBe',
'de_de' => 'AllOfProductContentTranslationsDtoDeDe'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nl_nl' => null,
'nl_be' => null,
'fr_be' => null,
'de_de' => null    ];

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
        'nl_nl' => 'nl_NL',
'nl_be' => 'nl_BE',
'fr_be' => 'fr_BE',
'de_de' => 'de_DE'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nl_nl' => 'setNlNl',
'nl_be' => 'setNlBe',
'fr_be' => 'setFrBe',
'de_de' => 'setDeDe'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nl_nl' => 'getNlNl',
'nl_be' => 'getNlBe',
'fr_be' => 'getFrBe',
'de_de' => 'getDeDe'    ];

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
        $this->container['nl_nl'] = isset($data['nl_nl']) ? $data['nl_nl'] : null;
        $this->container['nl_be'] = isset($data['nl_be']) ? $data['nl_be'] : null;
        $this->container['fr_be'] = isset($data['fr_be']) ? $data['fr_be'] : null;
        $this->container['de_de'] = isset($data['de_de']) ? $data['de_de'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['nl_nl'] === null) {
            $invalidProperties[] = "'nl_nl' can't be null";
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
     * Gets nl_nl
     *
     * @return \Emesa\PartnerPlatform\Model\ProductContentDto
     */
    public function getNlNl()
    {
        return $this->container['nl_nl'];
    }

    /**
     * Sets nl_nl
     *
     * @param \Emesa\PartnerPlatform\Model\ProductContentDto $nl_nl nl_nl
     *
     * @return $this
     */
    public function setNlNl($nl_nl)
    {
        $this->container['nl_nl'] = $nl_nl;

        return $this;
    }

    /**
     * Gets nl_be
     *
     * @return AllOfProductContentTranslationsDtoNlBe
     */
    public function getNlBe()
    {
        return $this->container['nl_be'];
    }

    /**
     * Sets nl_be
     *
     * @param AllOfProductContentTranslationsDtoNlBe $nl_be nl_be
     *
     * @return $this
     */
    public function setNlBe($nl_be)
    {
        $this->container['nl_be'] = $nl_be;

        return $this;
    }

    /**
     * Gets fr_be
     *
     * @return AllOfProductContentTranslationsDtoFrBe
     */
    public function getFrBe()
    {
        return $this->container['fr_be'];
    }

    /**
     * Sets fr_be
     *
     * @param AllOfProductContentTranslationsDtoFrBe $fr_be fr_be
     *
     * @return $this
     */
    public function setFrBe($fr_be)
    {
        $this->container['fr_be'] = $fr_be;

        return $this;
    }

    /**
     * Gets de_de
     *
     * @return AllOfProductContentTranslationsDtoDeDe
     */
    public function getDeDe()
    {
        return $this->container['de_de'];
    }

    /**
     * Sets de_de
     *
     * @param AllOfProductContentTranslationsDtoDeDe $de_de de_de
     *
     * @return $this
     */
    public function setDeDe($de_de)
    {
        $this->container['de_de'] = $de_de;

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
