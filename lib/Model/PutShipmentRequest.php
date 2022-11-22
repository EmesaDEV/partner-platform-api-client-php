<?php
/**
 * PutShipmentRequest
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
 * PutShipmentRequest Class Doc Comment
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PutShipmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PutShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'track_trace_url' => 'string',
'track_trace_number' => 'string',
'method' => 'string',
'lines' => '\Emesa\PartnerPlatform\Model\ShipmentLineDto[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'track_trace_url' => null,
'track_trace_number' => null,
'method' => null,
'lines' => null    ];

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
        'track_trace_url' => 'trackTraceUrl',
'track_trace_number' => 'trackTraceNumber',
'method' => 'method',
'lines' => 'lines'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'track_trace_url' => 'setTrackTraceUrl',
'track_trace_number' => 'setTrackTraceNumber',
'method' => 'setMethod',
'lines' => 'setLines'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'track_trace_url' => 'getTrackTraceUrl',
'track_trace_number' => 'getTrackTraceNumber',
'method' => 'getMethod',
'lines' => 'getLines'    ];

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
        $this->container['track_trace_url'] = isset($data['track_trace_url']) ? $data['track_trace_url'] : null;
        $this->container['track_trace_number'] = isset($data['track_trace_number']) ? $data['track_trace_number'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
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
     * Gets track_trace_url
     *
     * @return string
     */
    public function getTrackTraceUrl()
    {
        return $this->container['track_trace_url'];
    }

    /**
     * Sets track_trace_url
     *
     * @param string $track_trace_url track_trace_url
     *
     * @return $this
     */
    public function setTrackTraceUrl($track_trace_url)
    {
        $this->container['track_trace_url'] = $track_trace_url;

        return $this;
    }

    /**
     * Gets track_trace_number
     *
     * @return string
     */
    public function getTrackTraceNumber()
    {
        return $this->container['track_trace_number'];
    }

    /**
     * Sets track_trace_number
     *
     * @param string $track_trace_number track_trace_number
     *
     * @return $this
     */
    public function setTrackTraceNumber($track_trace_number)
    {
        $this->container['track_trace_number'] = $track_trace_number;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Emesa\PartnerPlatform\Model\ShipmentLineDto[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Emesa\PartnerPlatform\Model\ShipmentLineDto[] $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

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
