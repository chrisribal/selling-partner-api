<?php
/**
 * GetFeatureSkuResult
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaOutboundV20200701;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * GetFeatureSkuResult Class Doc Comment
 *
 * @category Class
 * @description The payload for the getFeatureSKU operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetFeatureSkuResult extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetFeatureSkuResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplace_id' => 'string',
        'feature_name' => 'string',
        'is_eligible' => 'bool',
        'ineligible_reasons' => 'string[]',
        'sku_info' => '\SellingPartnerApi\Model\FbaOutboundV20200701\FeatureSku'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplace_id' => null,
        'feature_name' => null,
        'is_eligible' => null,
        'ineligible_reasons' => null,
        'sku_info' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'feature_name' => 'featureName',
        'is_eligible' => 'isEligible',
        'ineligible_reasons' => 'ineligibleReasons',
        'sku_info' => 'skuInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'feature_name' => 'setFeatureName',
        'is_eligible' => 'setIsEligible',
        'ineligible_reasons' => 'setIneligibleReasons',
        'sku_info' => 'setSkuInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'feature_name' => 'getFeatureName',
        'is_eligible' => 'getIsEligible',
        'ineligible_reasons' => 'getIneligibleReasons',
        'sku_info' => 'getSkuInfo'
    ];


    
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['feature_name'] = $data['feature_name'] ?? null;
        $this->container['is_eligible'] = $data['is_eligible'] ?? null;
        $this->container['ineligible_reasons'] = $data['ineligible_reasons'] ?? null;
        $this->container['sku_info'] = $data['sku_info'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['feature_name'] === null) {
            $invalidProperties[] = "'feature_name' can't be null";
        }
        if ($this->container['is_eligible'] === null) {
            $invalidProperties[] = "'is_eligible' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id The requested marketplace.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }
    /**
     * Gets feature_name
     *
     * @return string
     */
    public function getFeatureName()
    {
        return $this->container['feature_name'];
    }

    /**
     * Sets feature_name
     *
     * @param string $feature_name The name of the feature.
     *
     * @return self
     */
    public function setFeatureName($feature_name)
    {
        $this->container['feature_name'] = $feature_name;

        return $this;
    }
    /**
     * Gets is_eligible
     *
     * @return bool
     */
    public function getIsEligible()
    {
        return $this->container['is_eligible'];
    }

    /**
     * Sets is_eligible
     *
     * @param bool $is_eligible When true, the seller SKU is eligible for the requested feature.
     *
     * @return self
     */
    public function setIsEligible($is_eligible)
    {
        $this->container['is_eligible'] = $is_eligible;

        return $this;
    }
    /**
     * Gets ineligible_reasons
     *
     * @return string[]|null
     */
    public function getIneligibleReasons()
    {
        return $this->container['ineligible_reasons'];
    }

    /**
     * Sets ineligible_reasons
     *
     * @param string[]|null $ineligible_reasons A list of one or more reasons that the seller SKU is ineligibile for the feature.
     *   Possible values:
     *   * MERCHANT_NOT_ENROLLED - The merchant isn't enrolled for the feature.
     *   * SKU_NOT_ELIGIBLE - The SKU doesn't reside in a warehouse that supports the feature.
     *   * INVALID_SKU - There is an issue with the SKU provided.
     *
     * @return self
     */
    public function setIneligibleReasons($ineligible_reasons)
    {
        $this->container['ineligible_reasons'] = $ineligible_reasons;

        return $this;
    }
    /**
     * Gets sku_info
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\FeatureSku|null
     */
    public function getSkuInfo()
    {
        return $this->container['sku_info'];
    }

    /**
     * Sets sku_info
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\FeatureSku|null $sku_info sku_info
     *
     * @return self
     */
    public function setSkuInfo($sku_info)
    {
        $this->container['sku_info'] = $sku_info;

        return $this;
    }
}


