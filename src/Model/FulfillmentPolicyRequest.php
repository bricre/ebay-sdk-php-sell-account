<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This root container defines a seller's fulfillment policy for a specific
 * marketplace and category type. Used when creating or updating a fulfillment
 * policy, fulfillmentPolicyRequest encapsulates a seller's terms for fulfilling an
 * order and includes the shipping carriers and services used for shipment and time
 * the seller takes to ship an order. While each seller must define at least one
 * fulfillment policy for every marketplace into which they sell, sellers can
 * define multiple fulfillment policies for a single marketplace by specifying
 * different configurations for the unique policies. A successful call returns a
 * fulfillmentPolicyId, plus the Location response header contains the URI to the
 * resource. Policy instructions can be localized by providing a locale in the
 * Content-Language HTTP request header. For example: Content-Language: de-DE. Tip:
 * For more on using business policies, see eBay business policies.
 */
class FulfillmentPolicyRequest extends AbstractModel
{
    /**
     * The CategoryTypeEnum value to which this policy applies. Used to discern
     * accounts that sell motor vehicles from those that don't. (Currently, each policy
     * can be set to only one categoryTypes value at a time.).
     *
     * @var \Ebay\Sell\Account\Model\CategoryType[]
     */
    public $categoryTypes = null;

    /**
     * If set to true, the seller offers freight shipping. Freight shipping can be used
     * for large items over 150 lbs. Default: false.
     *
     * @var bool
     */
    public $freightShipping = null;

    /**
     * If set to true, the seller has opted-in to the eBay Global Shipping Program and
     * that they use that service for their international shipments. Setting this value
     * automatically sets the international shipping service for the policy to
     * International Priority Shipping and the buyer does not need to set any other
     * shipping services for their INTERNATIONAL shipping options (unless they sell
     * items not covered by the Global Shipping Program). If this value is set to
     * false, the seller is responsible for manually specifying the international
     * shipping services, as described in Setting up worldwide shipping. To opt-in to
     * the Global Shipping Program, log in to eBay and navigate to My Account &gt; Site
     * Preferences &gt; Shipping preferences. Default: false.
     *
     * @var bool
     */
    public $globalShipping = null;

    /**
     * Specifies the maximum number of business days the seller commits to for
     * preparing and shipping an order after receiving a cleared payment for the order.
     * This time does not include the transit time it takes the shipping carrier to
     * deliver the order. Valid values can vary by site and by category. To obtain the
     * supported values for a site, call GeteBayDetails in the Trading API with
     * DetailName set to DispatchTimeMaxDetails, then inspect the
     * DispatchTimeMaxDetails container in the response for the time values supported
     * by the site (typical handling times are 0, 1, 2, 3, 4, 5, 10, 15, and 20, but
     * these can vary by site and may change over time.) This field is required when
     * the seller uses a flat or calculated shipping service, and it does not apply
     * when there is no shipping service specified (for example, if the policy
     * specifies only localPickup or freightShipping). In these cases, this field is
     * not used and you can set it to 0. Note that Top-Rated sellers must offer
     * same-day or one-day handling for a listing in order for that listing to receive
     * a Top Rated Plus seal on the View Item or Search Results pages. To offer
     * zero-day or one-day handling, set field to '0' or '1', respectively.Min: 0 Max:
     * 30.
     *
     * @var \Ebay\Sell\Account\Model\TimeDuration
     */
    public $handlingTime = null;

    /**
     * If set to true, no shipping is offered by this policy and the seller offers only
     * local pickup of the item (normally from a non-business location). This option is
     * most often used for customer-to-customer sales and if set, costType should be
     * set to NOT_SPECIFIED. Default: false.
     *
     * @var bool
     */
    public $localPickup = null;

    /**
     * The ID of the eBay marketplace to which this fulfillment policy applies. If this
     * value is not specified, value defaults to the seller's eBay registration site.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * A user-defined name for this fulfillment policy. Names must be unique for
     * policies assigned to the same marketplace. Max length: 64.
     *
     * @var string
     */
    public $name = null;

    /**
     * If set to true, the seller offers the &quot;Click and Collect&quot; feature.
     * Click and Collect is supported by the Inventory API, and it can be used with
     * Add/Revise/Relist calls. To enable &quot;Click and Collect&quot;, a seller (1)
     * must be eligible for Click and Collect and (2) must set this boolean field to
     * 'true'. Currently, Click and Collect is available to only large retail merchants
     * selling in the eBay AU and UK marketplaces. In addition to setting this field,
     * the merchant must also do the following to enable the &quot;Click and
     * Collect&quot; option on a listing: Have inventory for the product at one or more
     * physical stores tied to the merchant's account. Sellers can use the
     * createInventoryLocaion method in the Inventory API to associate physical stores
     * to their account and they can then can add inventory to specific store
     * locations. Set an immediate payment requirement on the item. The immediate
     * payment feature requires the seller to: Set the immediatePay flag in the payment
     * policy to 'true'. Include only one paymentMethods field in the payment policy
     * and set its value to PAYPAL. Include a valid PayPal contact in the
     * recipientAccountReference.referenceId field of the payment policy. Have a valid
     * store location with a complete street address. When a UK merchant successfully
     * lists an item with Click and Collect, prospective buyers within a reasonable
     * distance from one of the merchant's stores (that has stock available) will see
     * the &quot;Available for Click and Collect&quot; option on the listing, along
     * with information on the closest store that has the item.Default: false.
     *
     * @var bool
     */
    public $pickupDropOff = null;

    /**
     * A list that defines the seller's shipping configurations for DOMESTIC and
     * INTERNATIONAL order shipments. shippingOptions is a list with a single element
     * if the seller ships to only domestic locations. If the seller also ships
     * internationally, the list contains a second element that defines their
     * international shipping options. Shipping options configure the high-level
     * shipping settings that apply to orders, such as flat-rate or calculated
     * shipping, any rate tables the seller wants to associate with the shipping
     * services, plus other details (such as the shippingServices offered for domestic
     * or international shipments).
     *
     * @var \Ebay\Sell\Account\Model\ShippingOption[]
     */
    public $shippingOptions = null;

    /**
     * This object contains the regionIncluded and regionExcluded fields, which define
     * the geographical regions that a seller does and does not cover by the associated
     * fulfillment policy. shipToLocations appears at both the top-level of the
     * fulfillment policy as well as within the shippingOptions.shippingServices
     * container. Here at the top level, use the regionExcluded field to specify a list
     * of regions that a seller does not ship to with this particular fulfillment
     * policy. Note that you don't populate the regionIncluded field at this level.
     * Instead, specify the regions that are covered by this fulfillment policy in each
     * of the shippingServices.shipToLocations.regionIncluded containers you configure.
     * Every eBay marketplace supports its own set of regions that you can use in the
     * regionExcluded field. To determine the valid values for a marketplace, call
     * GeteBayDetails with DetailName set to ShippingLocationDetails, then review the
     * ShippingLocation fields in the response for the strings you use in
     * regionExcluded.regionName fields. Configuring shipToLocations can be tricky
     * because the regionIncluded and regionExcluded fields are valid in different
     * parts of the schema, and their allowable settings vary upon the context. For
     * details on configuring these fields, see The shipToLocations container.
     *
     * @var \Ebay\Sell\Account\Model\RegionSet
     */
    public $shipToLocations = null;
}
