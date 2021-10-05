<?php
/**
 * ProductVariation
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
 * ProductVariation Class Doc Comment
 *
 * @category Class
 * @package  Otto\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductVariation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductVariation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_reference' => 'string',
'sku' => 'string',
'ean' => 'string',
'gtin' => 'string',
'isbn' => 'string',
'upc' => 'string',
'pzn' => 'string',
'mpn' => 'string',
'moin' => 'string',
'offering_start_date' => '\DateTime',
'release_date' => '\DateTime',
'max_order_quantity' => 'int',
'product_description' => '\Otto\Client\Products\Model\ProductDescription',
'media_assets' => '\Otto\Client\Products\Model\MediaAsset[]',
'delivery' => '\Otto\Client\Products\Model\Delivery',
'pricing' => '\Otto\Client\Products\Model\Pricing',
'logistics' => '\Otto\Client\Products\Model\Logistics'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_reference' => null,
'sku' => null,
'ean' => null,
'gtin' => null,
'isbn' => null,
'upc' => null,
'pzn' => null,
'mpn' => null,
'moin' => null,
'offering_start_date' => 'date-time',
'release_date' => 'date-time',
'max_order_quantity' => 'int32',
'product_description' => null,
'media_assets' => null,
'delivery' => null,
'pricing' => null,
'logistics' => null    ];

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
        'product_reference' => 'productReference',
'sku' => 'sku',
'ean' => 'ean',
'gtin' => 'gtin',
'isbn' => 'isbn',
'upc' => 'upc',
'pzn' => 'pzn',
'mpn' => 'mpn',
'moin' => 'moin',
'offering_start_date' => 'offeringStartDate',
'release_date' => 'releaseDate',
'max_order_quantity' => 'maxOrderQuantity',
'product_description' => 'productDescription',
'media_assets' => 'mediaAssets',
'delivery' => 'delivery',
'pricing' => 'pricing',
'logistics' => 'logistics'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_reference' => 'setProductReference',
'sku' => 'setSku',
'ean' => 'setEan',
'gtin' => 'setGtin',
'isbn' => 'setIsbn',
'upc' => 'setUpc',
'pzn' => 'setPzn',
'mpn' => 'setMpn',
'moin' => 'setMoin',
'offering_start_date' => 'setOfferingStartDate',
'release_date' => 'setReleaseDate',
'max_order_quantity' => 'setMaxOrderQuantity',
'product_description' => 'setProductDescription',
'media_assets' => 'setMediaAssets',
'delivery' => 'setDelivery',
'pricing' => 'setPricing',
'logistics' => 'setLogistics'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_reference' => 'getProductReference',
'sku' => 'getSku',
'ean' => 'getEan',
'gtin' => 'getGtin',
'isbn' => 'getIsbn',
'upc' => 'getUpc',
'pzn' => 'getPzn',
'mpn' => 'getMpn',
'moin' => 'getMoin',
'offering_start_date' => 'getOfferingStartDate',
'release_date' => 'getReleaseDate',
'max_order_quantity' => 'getMaxOrderQuantity',
'product_description' => 'getProductDescription',
'media_assets' => 'getMediaAssets',
'delivery' => 'getDelivery',
'pricing' => 'getPricing',
'logistics' => 'getLogistics'    ];

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
        $this->container['product_reference'] = isset($data['product_reference']) ? $data['product_reference'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['gtin'] = isset($data['gtin']) ? $data['gtin'] : null;
        $this->container['isbn'] = isset($data['isbn']) ? $data['isbn'] : null;
        $this->container['upc'] = isset($data['upc']) ? $data['upc'] : null;
        $this->container['pzn'] = isset($data['pzn']) ? $data['pzn'] : null;
        $this->container['mpn'] = isset($data['mpn']) ? $data['mpn'] : null;
        $this->container['moin'] = isset($data['moin']) ? $data['moin'] : null;
        $this->container['offering_start_date'] = isset($data['offering_start_date']) ? $data['offering_start_date'] : null;
        $this->container['release_date'] = isset($data['release_date']) ? $data['release_date'] : null;
        $this->container['max_order_quantity'] = isset($data['max_order_quantity']) ? $data['max_order_quantity'] : null;
        $this->container['product_description'] = isset($data['product_description']) ? $data['product_description'] : null;
        $this->container['media_assets'] = isset($data['media_assets']) ? $data['media_assets'] : null;
        $this->container['delivery'] = isset($data['delivery']) ? $data['delivery'] : null;
        $this->container['pricing'] = isset($data['pricing']) ? $data['pricing'] : null;
        $this->container['logistics'] = isset($data['logistics']) ? $data['logistics'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['product_reference'] === null) {
            $invalidProperties[] = "'product_reference' can't be null";
        }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['ean'] === null) {
            $invalidProperties[] = "'ean' can't be null";
        }
        if ($this->container['delivery'] === null) {
            $invalidProperties[] = "'delivery' can't be null";
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
     * Gets product_reference
     *
     * @return string
     */
    public function getProductReference()
    {
        return $this->container['product_reference'];
    }

    /**
     * Sets product_reference
     *
     * @param string $product_reference The productReference groups all variations, that you want to combine into one product. This is not visible to the customer. The productReference can be freely assigned and may consist of maximum 50 characters. You can only use the productReference once within your product catalog. You should therefore use a value that makes sense for all variations of the product and does not refer to any specifics of a particular variation. You will find the product name, for example, in the product overview in the portal or on the orders you receive from OTTO.
     *
     * @return $this
     */
    public function setProductReference($product_reference)
    {
        $this->container['product_reference'] = $product_reference;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku Identifier for a product variation, provided by the partner, must be unique for a partner. It is mandatory and may consist of a maximum of 50 characters.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

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
     * @param string $ean External identifier of a product, must be unique in a partner assortment, must not start with a 2.
     *
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string $gtin Global Trade Item Number, formerly known as EAN.
     *
     * @return $this
     */
    public function setGtin($gtin)
    {
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets isbn
     *
     * @return string
     */
    public function getIsbn()
    {
        return $this->container['isbn'];
    }

    /**
     * Sets isbn
     *
     * @param string $isbn International Standard Book Number, internationally used for identifying media artifacts, like books.
     *
     * @return $this
     */
    public function setIsbn($isbn)
    {
        $this->container['isbn'] = $isbn;

        return $this;
    }

    /**
     * Gets upc
     *
     * @return string
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     *
     * @param string $upc Universal Product Code.
     *
     * @return $this
     */
    public function setUpc($upc)
    {
        $this->container['upc'] = $upc;

        return $this;
    }

    /**
     * Gets pzn
     *
     * @return string
     */
    public function getPzn()
    {
        return $this->container['pzn'];
    }

    /**
     * Sets pzn
     *
     * @param string $pzn Pharmazentralnummer, a german standard for identifying pharmaceutical products.
     *
     * @return $this
     */
    public function setPzn($pzn)
    {
        $this->container['pzn'] = $pzn;

        return $this;
    }

    /**
     * Gets mpn
     *
     * @return string
     */
    public function getMpn()
    {
        return $this->container['mpn'];
    }

    /**
     * Sets mpn
     *
     * @param string $mpn Manufacturer part number, may consist of a maximum of 50 characters.
     *
     * @return $this
     */
    public function setMpn($mpn)
    {
        $this->container['mpn'] = $mpn;

        return $this;
    }

    /**
     * Gets moin
     *
     * @return string
     */
    public function getMoin()
    {
        return $this->container['moin'];
    }

    /**
     * Sets moin
     *
     * @param string $moin My Otto Identification Number. The market place ID of the product, is generated by the marketplace and returned to the partner, when product is created on the market place.
     *
     * @return $this
     */
    public function setMoin($moin)
    {
        $this->container['moin'] = $moin;

        return $this;
    }

    /**
     * Gets offering_start_date
     *
     * @return \DateTime
     */
    public function getOfferingStartDate()
    {
        return $this->container['offering_start_date'];
    }

    /**
     * Sets offering_start_date
     *
     * @param \DateTime $offering_start_date Date to which the product can be ordered via OTTO marketplace.
     *
     * @return $this
     */
    public function setOfferingStartDate($offering_start_date)
    {
        $this->container['offering_start_date'] = $offering_start_date;

        return $this;
    }

    /**
     * Gets release_date
     *
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->container['release_date'];
    }

    /**
     * Sets release_date
     *
     * @param \DateTime $release_date Date to which the product is released by the manufacturer, e.g. computer games.
     *
     * @return $this
     */
    public function setReleaseDate($release_date)
    {
        $this->container['release_date'] = $release_date;

        return $this;
    }

    /**
     * Gets max_order_quantity
     *
     * @return int
     */
    public function getMaxOrderQuantity()
    {
        return $this->container['max_order_quantity'];
    }

    /**
     * Sets max_order_quantity
     *
     * @param int $max_order_quantity The maximum allowed order quantity for the customer.
     *
     * @return $this
     */
    public function setMaxOrderQuantity($max_order_quantity)
    {
        $this->container['max_order_quantity'] = $max_order_quantity;

        return $this;
    }

    /**
     * Gets product_description
     *
     * @return \Otto\Client\Products\Model\ProductDescription
     */
    public function getProductDescription()
    {
        return $this->container['product_description'];
    }

    /**
     * Sets product_description
     *
     * @param \Otto\Client\Products\Model\ProductDescription $product_description product_description
     *
     * @return $this
     */
    public function setProductDescription($product_description)
    {
        $this->container['product_description'] = $product_description;

        return $this;
    }

    /**
     * Gets media_assets
     *
     * @return \Otto\Client\Products\Model\MediaAsset[]
     */
    public function getMediaAssets()
    {
        return $this->container['media_assets'];
    }

    /**
     * Sets media_assets
     *
     * @param \Otto\Client\Products\Model\MediaAsset[] $media_assets media_assets
     *
     * @return $this
     */
    public function setMediaAssets($media_assets)
    {
        $this->container['media_assets'] = $media_assets;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \Otto\Client\Products\Model\Delivery
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \Otto\Client\Products\Model\Delivery $delivery delivery
     *
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets pricing
     *
     * @return \Otto\Client\Products\Model\Pricing
     */
    public function getPricing()
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing
     *
     * @param \Otto\Client\Products\Model\Pricing $pricing pricing
     *
     * @return $this
     */
    public function setPricing($pricing)
    {
        $this->container['pricing'] = $pricing;

        return $this;
    }

    /**
     * Gets logistics
     *
     * @return \Otto\Client\Products\Model\Logistics
     */
    public function getLogistics()
    {
        return $this->container['logistics'];
    }

    /**
     * Sets logistics
     *
     * @param \Otto\Client\Products\Model\Logistics $logistics logistics
     *
     * @return $this
     */
    public function setLogistics($logistics)
    {
        $this->container['logistics'] = $logistics;

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
