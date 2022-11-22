<?php
/**
 * AddressDto
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
 * OpenAPI spec version: 1.1.8
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
 * AddressDto Class Doc Comment
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddressDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'company' => 'string',
'street' => 'string',
'house_number' => 'string',
'house_number_addition' => 'string',
'floor_number' => 'string',
'digi_code' => 'string',
'city' => 'string',
'zipcode' => 'string',
'country_iso3166' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'company' => null,
'street' => null,
'house_number' => null,
'house_number_addition' => null,
'floor_number' => null,
'digi_code' => null,
'city' => null,
'zipcode' => null,
'country_iso3166' => null    ];

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
        'name' => 'name',
'company' => 'company',
'street' => 'street',
'house_number' => 'houseNumber',
'house_number_addition' => 'houseNumberAddition',
'floor_number' => 'floorNumber',
'digi_code' => 'digiCode',
'city' => 'city',
'zipcode' => 'zipcode',
'country_iso3166' => 'countryIso3166'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'company' => 'setCompany',
'street' => 'setStreet',
'house_number' => 'setHouseNumber',
'house_number_addition' => 'setHouseNumberAddition',
'floor_number' => 'setFloorNumber',
'digi_code' => 'setDigiCode',
'city' => 'setCity',
'zipcode' => 'setZipcode',
'country_iso3166' => 'setCountryIso3166'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'company' => 'getCompany',
'street' => 'getStreet',
'house_number' => 'getHouseNumber',
'house_number_addition' => 'getHouseNumberAddition',
'floor_number' => 'getFloorNumber',
'digi_code' => 'getDigiCode',
'city' => 'getCity',
'zipcode' => 'getZipcode',
'country_iso3166' => 'getCountryIso3166'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['house_number'] = isset($data['house_number']) ? $data['house_number'] : null;
        $this->container['house_number_addition'] = isset($data['house_number_addition']) ? $data['house_number_addition'] : null;
        $this->container['floor_number'] = isset($data['floor_number']) ? $data['floor_number'] : null;
        $this->container['digi_code'] = isset($data['digi_code']) ? $data['digi_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['country_iso3166'] = isset($data['country_iso3166']) ? $data['country_iso3166'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ($this->container['house_number'] === null) {
            $invalidProperties[] = "'house_number' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['zipcode'] === null) {
            $invalidProperties[] = "'zipcode' can't be null";
        }
        if ($this->container['country_iso3166'] === null) {
            $invalidProperties[] = "'country_iso3166' can't be null";
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
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param string $house_number house_number
     *
     * @return $this
     */
    public function setHouseNumber($house_number)
    {
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets house_number_addition
     *
     * @return string
     */
    public function getHouseNumberAddition()
    {
        return $this->container['house_number_addition'];
    }

    /**
     * Sets house_number_addition
     *
     * @param string $house_number_addition house_number_addition
     *
     * @return $this
     */
    public function setHouseNumberAddition($house_number_addition)
    {
        $this->container['house_number_addition'] = $house_number_addition;

        return $this;
    }

    /**
     * Gets floor_number
     *
     * @return string
     */
    public function getFloorNumber()
    {
        return $this->container['floor_number'];
    }

    /**
     * Sets floor_number
     *
     * @param string $floor_number floor_number
     *
     * @return $this
     */
    public function setFloorNumber($floor_number)
    {
        $this->container['floor_number'] = $floor_number;

        return $this;
    }

    /**
     * Gets digi_code
     *
     * @return string
     */
    public function getDigiCode()
    {
        return $this->container['digi_code'];
    }

    /**
     * Sets digi_code
     *
     * @param string $digi_code digi_code
     *
     * @return $this
     */
    public function setDigiCode($digi_code)
    {
        $this->container['digi_code'] = $digi_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string $zipcode zipcode
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets country_iso3166
     *
     * @return string
     */
    public function getCountryIso3166()
    {
        return $this->container['country_iso3166'];
    }

    /**
     * Sets country_iso3166
     *
     * @param string $country_iso3166 2-letter code by ISO 3166-1 alpha-2
     *
     * @return $this
     */
    public function setCountryIso3166($country_iso3166)
    {
        $this->container['country_iso3166'] = $country_iso3166;

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
