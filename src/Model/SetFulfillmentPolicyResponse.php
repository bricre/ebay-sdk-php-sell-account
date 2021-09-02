<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Complex type that that gets populated with a response containing a fulfillment
 * policy.
 */
class SetFulfillmentPolicyResponse extends AbstractModel
{
    /**
     * The CategoryTypeEnum value to which this policy applies. This container is used
     * to discern accounts that sell motor vehicles from those that do not.
     * Restriction: Currently, each policy can be set to only one categoryTypes value
     * at a time.
     *
     * @var \Ebay\Sell\Account\Model\CategoryType[]
     */
    public $categoryTypes = null;

    /**
     * If set to true, the seller offers freight shipping. Freight shipping can be used
     * for large items over 150 lbs.
     *
     * @var bool
     */
    public $freightShipping = null;

    /**
     * A unique eBay-assigned ID for a fulfillment policy. This ID is generated when
     * the policy is created.
     *
     * @var string
     */
    public $fulfillmentPolicyId = null;

    /**
     * If set to true, the seller has opted-in to the Global Shipping Program and eBay
     * automatically sets the international shipping service options to International
     * Priority Shipping. If the value of globalShipping is false, the seller is
     * responsible for specifying one or more international shipping service options if
     * they want to ship internationally.
     *
     * @var bool
     */
    public $globalShipping = null;

    /**
     * Specifies the maximum number of business days the seller commits to for
     * preparing and shipping an order after receiving a cleared payment for the order.
     * This time does not include the transit time it takes the shipping carrier to
     * deliver the order. Note that Top-Rated sellers must offer same-day or one-day
     * handling for a listing in order for that listing to receive a Top Rated Plus
     * seal on the View Item or Search Results pages. This field is required when the
     * seller uses a flat or calculated shipping service, and it does not apply when
     * there is no shipping service specified (for example, if the policy specifies
     * only localPickup or freightShipping). In these cases, this field is not used and
     * you can set it to 0. Min: 0 Max: 30.
     *
     * @var \Ebay\Sell\Account\Model\TimeDuration
     */
    public $handlingTime = null;

    /**
     * If set to true, no shipping is offered by this policy and the seller offers only
     * local pickup of the item (normally from a non-business location). This option is
     * most often used for customer-to-customer sales and if set, costType should be
     * set to NOT_SPECIFIED.
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
     * If set to true, the seller offers the &quot;Click and Collect&quot; option.
     * Currently, &quot;Click and Collect&quot; is available only to large retail
     * merchants the eBay AU and UK marketplaces.
     *
     * @var bool
     */
    public $pickupDropOff = null;

    /**
     * A list that defines the seller's shipping configurations for DOMESTIC and
     * INTERNATIONAL order shipments. The list has a single element if the seller ships
     * to only domestic locations. If the seller also ships internationally, a second
     * element defines their international shipping options. Shipping options configure
     * the high-level shipping settings that apply to orders, such as flat-rate or
     * calculated shipping, and any rate tables the seller wants to associate with the
     * shipping services. Each shippingOption element has a shippingServices container
     * that defines the list of shipping services (domestic or international) offered
     * with this fulfillment policy.
     *
     * @var \Ebay\Sell\Account\Model\ShippingOption[]
     */
    public $shippingOptions = null;

    /**
     * This object contains the regionIncluded and regionExcluded fields, which defines
     * the areas where the seller does and doesn't ship to with this fulfillment
     * policy. shipToLocations appears at both the top-level of the fulfillment policy
     * as well as within the individual shippingOptions.shippingService containers.
     * Here at the top level, this field returns the list of regionExclude areas that
     * have been defined at this level, plus a complete list of regionIncluded fields
     * that have been defined in all the policy's
     * shippingOptions.shippingServices.shipToLocations containers. For details on
     * configuring this field, see The shipToLocations container.
     *
     * @var \Ebay\Sell\Account\Model\RegionSet
     */
    public $shipToLocations = null;

    /**
     * A list of warnings that were generated during the processing of the request.
     * This field normally returns empty, which indicates the request did not generate
     * any warnings.
     *
     * @var \Ebay\Sell\Account\Model\Error[]
     */
    public $warnings = null;
}
