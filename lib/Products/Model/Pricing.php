<?php
/**
 * Pricing
 *
 * PHP version 5
 *
 * @category Class
 * @package  Otto\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Public Partner Product API
 *
 * Manage your product data, send images and                   much more.
 *
 * OpenAPI spec version: V1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Otto\Client\Products\Model;

use ArrayAccess;
use Otto\Client\ObjectSerializer;

/**
 * Pricing Class Doc Comment
 *
 * @category Class
 * @package  Otto\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Pricing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Pricing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'standard_price' => '\Otto\Client\Products\Model\MonetaryAmount',
'vat' => 'string',
'msrp' => '\Otto\Client\Products\Model\MonetaryAmount',
'sale' => '\Otto\Client\Products\Model\Sale',
'norm_price_info' => '\Otto\Client\Products\Model\NormPriceInfo'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'standard_price' => null,
'vat' => null,
'msrp' => null,
'sale' => null,
'norm_price_info' => null    ];

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
        'standard_price' => 'standardPrice',
'vat' => 'vat',
'msrp' => 'msrp',
'sale' => 'sale',
'norm_price_info' => 'normPriceInfo'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'standard_price' => 'setStandardPrice',
'vat' => 'setVat',
'msrp' => 'setMsrp',
'sale' => 'setSale',
'norm_price_info' => 'setNormPriceInfo'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'standard_price' => 'getStandardPrice',
'vat' => 'getVat',
'msrp' => 'getMsrp',
'sale' => 'getSale',
'norm_price_info' => 'getNormPriceInfo'    ];

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

    const VAT_FULL = 'FULL';
const VAT_REDUCED = 'REDUCED';
const VAT_FREE = 'FREE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVatAllowableValues()
    {
        return [
            self::VAT_FULL,
self::VAT_REDUCED,
self::VAT_FREE,        ];
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
        $this->container['standard_price'] = isset($data['standard_price']) ? $data['standard_price'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['msrp'] = isset($data['msrp']) ? $data['msrp'] : null;
        $this->container['sale'] = isset($data['sale']) ? $data['sale'] : null;
        $this->container['norm_price_info'] = isset($data['norm_price_info']) ? $data['norm_price_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['standard_price'] === null) {
            $invalidProperties[] = "'standard_price' can't be null";
        }
        if ($this->container['vat'] === null) {
            $invalidProperties[] = "'vat' can't be null";
        }
        $allowedValues = $this->getVatAllowableValues();
        if (!is_null($this->container['vat']) && !in_array($this->container['vat'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'vat', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets standard_price
     *
     * @return \Otto\Client\Products\Model\MonetaryAmount
     */
    public function getStandardPrice()
    {
        return $this->container['standard_price'];
    }

    /**
     * Sets standard_price
     *
     * @param \Otto\Client\Products\Model\MonetaryAmount $standard_price standard_price
     *
     * @return $this
     */
    public function setStandardPrice($standard_price)
    {
        $this->container['standard_price'] = $standard_price;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return string
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param string $vat The value added tax that is included in the sales price, currently FULL or REDUCED
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $allowedValues = $this->getVatAllowableValues();
        if (!in_array($vat, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'vat', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets msrp
     *
     * @return \Otto\Client\Products\Model\MonetaryAmount
     */
    public function getMsrp()
    {
        return $this->container['msrp'];
    }

    /**
     * Sets msrp
     *
     * @param \Otto\Client\Products\Model\MonetaryAmount $msrp msrp
     *
     * @return $this
     */
    public function setMsrp($msrp)
    {
        $this->container['msrp'] = $msrp;

        return $this;
    }

    /**
     * Gets sale
     *
     * @return \Otto\Client\Products\Model\Sale
     */
    public function getSale()
    {
        return $this->container['sale'];
    }

    /**
     * Sets sale
     *
     * @param \Otto\Client\Products\Model\Sale $sale sale
     *
     * @return $this
     */
    public function setSale($sale)
    {
        $this->container['sale'] = $sale;

        return $this;
    }

    /**
     * Gets norm_price_info
     *
     * @return \Otto\Client\Products\Model\NormPriceInfo
     */
    public function getNormPriceInfo()
    {
        return $this->container['norm_price_info'];
    }

    /**
     * Sets norm_price_info
     *
     * @param \Otto\Client\Products\Model\NormPriceInfo $norm_price_info norm_price_info
     *
     * @return $this
     */
    public function setNormPriceInfo($norm_price_info)
    {
        $this->container['norm_price_info'] = $norm_price_info;

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
