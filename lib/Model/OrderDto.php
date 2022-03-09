<?php
/**
 * OrderDto
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
 * OpenAPI spec version: 1.1.4
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
 * OrderDto Class Doc Comment
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'market_order_id' => 'string',
'total_shipping_costs_incl_vat_in_cents' => 'int',
'customer_email' => 'string',
'customer_phone_number' => 'string',
'address' => '\Emesa\PartnerPlatform\Model\AddressDto',
'delivery_instructions' => 'string',
'lines' => '\Emesa\PartnerPlatform\Model\OrderLineDto[]',
'order_date_time' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'market_order_id' => null,
'total_shipping_costs_incl_vat_in_cents' => null,
'customer_email' => null,
'customer_phone_number' => null,
'address' => null,
'delivery_instructions' => null,
'lines' => null,
'order_date_time' => 'date-time'    ];

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
        'market_order_id' => 'marketOrderId',
'total_shipping_costs_incl_vat_in_cents' => 'totalShippingCostsInclVatInCents',
'customer_email' => 'customerEmail',
'customer_phone_number' => 'customerPhoneNumber',
'address' => 'address',
'delivery_instructions' => 'deliveryInstructions',
'lines' => 'lines',
'order_date_time' => 'orderDateTime'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'market_order_id' => 'setMarketOrderId',
'total_shipping_costs_incl_vat_in_cents' => 'setTotalShippingCostsInclVatInCents',
'customer_email' => 'setCustomerEmail',
'customer_phone_number' => 'setCustomerPhoneNumber',
'address' => 'setAddress',
'delivery_instructions' => 'setDeliveryInstructions',
'lines' => 'setLines',
'order_date_time' => 'setOrderDateTime'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'market_order_id' => 'getMarketOrderId',
'total_shipping_costs_incl_vat_in_cents' => 'getTotalShippingCostsInclVatInCents',
'customer_email' => 'getCustomerEmail',
'customer_phone_number' => 'getCustomerPhoneNumber',
'address' => 'getAddress',
'delivery_instructions' => 'getDeliveryInstructions',
'lines' => 'getLines',
'order_date_time' => 'getOrderDateTime'    ];

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
        $this->container['market_order_id'] = isset($data['market_order_id']) ? $data['market_order_id'] : null;
        $this->container['total_shipping_costs_incl_vat_in_cents'] = isset($data['total_shipping_costs_incl_vat_in_cents']) ? $data['total_shipping_costs_incl_vat_in_cents'] : null;
        $this->container['customer_email'] = isset($data['customer_email']) ? $data['customer_email'] : null;
        $this->container['customer_phone_number'] = isset($data['customer_phone_number']) ? $data['customer_phone_number'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['delivery_instructions'] = isset($data['delivery_instructions']) ? $data['delivery_instructions'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['order_date_time'] = isset($data['order_date_time']) ? $data['order_date_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['market_order_id'] === null) {
            $invalidProperties[] = "'market_order_id' can't be null";
        }
        if ($this->container['total_shipping_costs_incl_vat_in_cents'] === null) {
            $invalidProperties[] = "'total_shipping_costs_incl_vat_in_cents' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
        }
        if ($this->container['order_date_time'] === null) {
            $invalidProperties[] = "'order_date_time' can't be null";
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
     * Gets market_order_id
     *
     * @return string
     */
    public function getMarketOrderId()
    {
        return $this->container['market_order_id'];
    }

    /**
     * Sets market_order_id
     *
     * @param string $market_order_id market_order_id
     *
     * @return $this
     */
    public function setMarketOrderId($market_order_id)
    {
        $this->container['market_order_id'] = $market_order_id;

        return $this;
    }

    /**
     * Gets total_shipping_costs_incl_vat_in_cents
     *
     * @return int
     */
    public function getTotalShippingCostsInclVatInCents()
    {
        return $this->container['total_shipping_costs_incl_vat_in_cents'];
    }

    /**
     * Sets total_shipping_costs_incl_vat_in_cents
     *
     * @param int $total_shipping_costs_incl_vat_in_cents total_shipping_costs_incl_vat_in_cents
     *
     * @return $this
     */
    public function setTotalShippingCostsInclVatInCents($total_shipping_costs_incl_vat_in_cents)
    {
        $this->container['total_shipping_costs_incl_vat_in_cents'] = $total_shipping_costs_incl_vat_in_cents;

        return $this;
    }

    /**
     * Gets customer_email
     *
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->container['customer_email'];
    }

    /**
     * Sets customer_email
     *
     * @param string $customer_email customer_email
     *
     * @return $this
     */
    public function setCustomerEmail($customer_email)
    {
        $this->container['customer_email'] = $customer_email;

        return $this;
    }

    /**
     * Gets customer_phone_number
     *
     * @return string
     */
    public function getCustomerPhoneNumber()
    {
        return $this->container['customer_phone_number'];
    }

    /**
     * Sets customer_phone_number
     *
     * @param string $customer_phone_number customer_phone_number
     *
     * @return $this
     */
    public function setCustomerPhoneNumber($customer_phone_number)
    {
        $this->container['customer_phone_number'] = $customer_phone_number;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Emesa\PartnerPlatform\Model\AddressDto
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Emesa\PartnerPlatform\Model\AddressDto $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets delivery_instructions
     *
     * @return string
     */
    public function getDeliveryInstructions()
    {
        return $this->container['delivery_instructions'];
    }

    /**
     * Sets delivery_instructions
     *
     * @param string $delivery_instructions delivery_instructions
     *
     * @return $this
     */
    public function setDeliveryInstructions($delivery_instructions)
    {
        $this->container['delivery_instructions'] = $delivery_instructions;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Emesa\PartnerPlatform\Model\OrderLineDto[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Emesa\PartnerPlatform\Model\OrderLineDto[] $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets order_date_time
     *
     * @return \DateTime
     */
    public function getOrderDateTime()
    {
        return $this->container['order_date_time'];
    }

    /**
     * Sets order_date_time
     *
     * @param \DateTime $order_date_time order_date_time
     *
     * @return $this
     */
    public function setOrderDateTime($order_date_time)
    {
        $this->container['order_date_time'] = $order_date_time;

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
