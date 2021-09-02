<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type defines a seller's shipping configuration for either a
 * DOMESTIC or INTERNATIONAL shipping option. Shipping options configure the
 * high-level settings for shipments, such as flat-rate or calculated shipping, and
 * any rate tables the seller wants to associate with the policy. Each
 * shippingOption element has a shippingServices container that defines the list of
 * shipping carriers and services that are available for the parent shipping option
 * (that is, for either DOMESTIC or INTERNATIONAL shipping). If a seller offers an
 * international shipping option, they must also offer a domestic shipping option.
 * Note that costType (FLAT_RATE or CALCULATED) is set in shippingOptions and that
 * all associated shipping services must be able to support this cost type.
 */
class ShippingOption extends AbstractModel
{
    /**
     * Defines whether the shipping cost is FLAT_RATE (the same rate for all buyers),
     * CALCULATED (the shipping rate varies by the ship-to location and size and weight
     * of the package, as defined by the item), or NOT_SPECIFIED (for use with local
     * pickup). Required if the policy offers shipping options using a shippingOptions
     * container. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingCostTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $costType = null;

    /**
     * This field has been deprecated. Shipping insurance is offered only via a
     * shipping carrier's shipping services and is no longer available via eBay
     * shipping policies.
     *
     * @var \Ebay\Sell\Account\Model\Amount
     */
    public $insuranceFee = null;

    /**
     * This field has been deprecated. Shipping insurance is offered only via a
     * shipping carrier's shipping services and is no longer available via eBay
     * shipping policies.
     *
     * @var bool
     */
    public $insuranceOffered = null;

    /**
     * Use this field to set the ShippingOption element to either DOMESTIC or
     * INTERNATIONAL. Required if the policy offers shipping options using a
     * shippingOptions container. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $optionType = null;

    /**
     * Applicable to only CALCULATED shipping, an amount a seller can add to cover
     * packaging, handling costs. This cost is an addition to the selected shipping
     * service cost and is included in the sum of the final shipping service costs in
     * the output. This field must specify a zero value if freeShipping is set to true.
     * If the seller offers domestic and international calculated shipping but sets
     * this field for only domestic shipping, eBay also applies the cost to all
     * international shipments. To specify a fee for only international shipments, set
     * the a domestic packagingHandlingCost to 0.
     *
     * @var \Ebay\Sell\Account\Model\Amount
     */
    public $packageHandlingCost = null;

    /**
     * A unique eBay-assigned ID associated with a user-created shipping rate table.
     * The locality of a shipping rate table can be either DOMESTIC or INTERNATIONAL
     * and you must ensure the value specified in this field references a shipping rate
     * table that matches the type specified in the shippingOptions.optionType field.
     * If you mismatch the types, eBay responds with a 20403 error. Call getRateTable
     * to retrieve information (including rateTableId values) on the rate tables
     * configured by a seller. For information on creating rate tables, see Using
     * shipping rate tables.
     *
     * @var string
     */
    public $rateTableId = null;

    /**
     * Contains a list of shipping services offered for either DOMESTIC or
     * INTERNATIONAL shipments. Sellers can specify up to four domestic shipping
     * services and up to five international shipping services by using separate
     * shippingService containers for each. Note that if the seller is opted in to the
     * Global Shipping Program, they can specify only four other international shipping
     * services, regardless of whether or not Global Shipping is offered as one of the
     * services. Required if the policy offers shipping options using a shippingOptions
     * container.
     *
     * @var \Ebay\Sell\Account\Model\ShippingService[]
     */
    public $shippingServices = null;
}
