<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A complex type that defines the available shipping services offered in the
 * parent shippingOptions container. The shipping services specified here must be
 * able to accommodate the optionType defined in the parent shippingOption
 * container (either DOMESTIC or INTERNATIONAL). Tip: For more on setting up
 * shipping services, see Setting the shipping carrier and shipping service values.
 */
class ShippingService extends AbstractModel
{
    /**
     * The cost of shipping each additional item if the same buyer purchases a multiple
     * quantity of the same line item. This field is applicable for policies that cover
     * multiple-quantity, fixed-price listings and is not applicable for policies that
     * apply to single-quantity listings. Sellers can encourage buyers to purchase
     * multiple items and by offering a shipping discount on added items. The value for
     * this field should be lower than the value set for shippingCost and you can set
     * this value to 0 to offer free shipping on added items. If this value is not set,
     * it defaults to the value set for shippingCost.
     *
     * @var \Ebay\Sell\Account\Model\Amount
     */
    public $additionalShippingCost = null;

    /**
     * This field is only applicable to vehicle categories on eBay Motors (US and
     * Canada). If set to true, the buyer is responsible for picking up the vehicle.
     * Otherwise, the seller should specify the vehicle pickup arrangements in the item
     * description. The seller cannot modify this flag if the vehicle has bids or if
     * the listing ends within 12 hours. Default: false.
     *
     * @var bool
     */
    public $buyerResponsibleForPickup = null;

    /**
     * This field is applicable for only items listed in vehicle categories on eBay
     * Motors (US and Canada). If set to true, the buyer is responsible for the
     * shipment of the vehicle. Otherwise, the seller should specify the vehicle
     * shipping arrangements in the item description. The seller cannot modify this
     * flag if the vehicle has bids or if the listing ends within 12 hours. Default:
     * false.
     *
     * @var bool
     */
    public $buyerResponsibleForShipping = null;

    /**
     * The value indicates the Cash on Delivery (COD) fee that the seller charges if
     * the buyer uses the CASH_ON_DELIVERY payment method. This fee is added to the
     * total cost of the item, and the total cost is due from the buyer upon the
     * delivery of the item. This field is applicable only if the buyer-selected
     * payment method is 'COD' and the selected shipping service option supports a Cash
     * on Delivery option. To see if a domestic shipping service supports the Cash on
     * Delivery option, call GeteBayDetails with DetailName set to
     * ShippingServiceDetails, then review the response to see if CODService is set to
     * true for the targeted shipping service.
     *
     * @var \Ebay\Sell\Account\Model\Amount
     */
    public $cashOnDeliveryFee = null;

    /**
     * If set to true, the seller offers free shipping to the buyer. This field can
     * only be included and set to 'true' for the first domestic shipping service
     * option specified in the shippingServices container (it is ignored if set for
     * subsequent shipping services). The first specified shipping service option has a
     * sortOrder value of 1 or (if the sortOrderId field is not used) it is the
     * shipping service option that's specified first in the shippingServices
     * container.
     *
     * @var bool
     */
    public $freeShipping = null;

    /**
     * The shipping carrier, such as 'USPS', 'FedEx', 'UPS', and so on.
     *
     * @var string
     */
    public $shippingCarrierCode = null;

    /**
     * For FLAT_RATE shipping options, the amount specified in this field is the
     * shipping cost for the selected shipping carrier and service. The amount supplied
     * must exclude any additional shipping charges (such as the seller's handling
     * charges). This field is not applicable in CALCULATED shipping services (the cost
     * for a calculated shipping service cannot be determined until the listing has
     * ended and the buyer has specified a postal code). This value is automatically
     * set to '0.0' if freeShipping is set to true. Required if the shipping option
     * uses a FLAT_RATE cost type and freeShipping is false.
     *
     * @var \Ebay\Sell\Account\Model\Amount
     */
    public $shippingCost = null;

    /**
     * The shipping service that the shipping carrier uses to ship an item. For
     * example, an overnight, two-day delivery, or other type of service. For details
     * on configuring shipping services, see Setting the shipping carrier and shipping
     * service values.
     *
     * @var string
     */
    public $shippingServiceCode = null;

    /**
     * This object contains the regionIncluded and regionExcluded fields, which define
     * the geographical regions that a seller does and does not cover by the associated
     * shipping policy. shipToLocations appears at both the top-level of the
     * fulfillment policy as well as here, within the shippingOptions.shippingServices
     * container. Within individual shippingServices containers, use the regionIncluded
     * container to specify the list of regions to where a seller ships using that
     * particular shipping service (you can use different shipping services to cover
     * different regions). Note: Do not populate the regionExcluded field at this
     * level. Instead, define the regions to where a seller does not ship using the
     * shipToLocations container found at the top level of the FulfillmentPolicyRequest
     * container. Every eBay marketplace supports its own set of regions that you can
     * use in the regionIncluded field. To determine the valid 'Ship-To' values for a
     * marketplace, call GeteBayDetails with DetailName set to ShippingLocationDetails,
     * then review the ShippingLocation fields in the response for the strings that you
     * use in the regionIncluded.regionName field. When returned at this level, this
     * container lists only the regionIncluded areas defined for the associated
     * shippingService container. For more details, see The shipToLocations container.
     *
     * @var \Ebay\Sell\Account\Model\RegionSet
     */
    public $shipToLocations = null;

    /**
     * This integer value controls the order that this shipping service option appears
     * in the View Item and Checkout pages, as related to the other specified shipping
     * service options. Sellers can specify up to four domestic shipping services (in
     * four separate shippingService containers), so valid values are 1, 2, 3, and 4. A
     * shipping service option with a sortOrder value of '1' appears at the top of View
     * Item and Checkout pages. Conversely, a shipping service option with a sortOrder
     * value of '4' appears at the bottom of the list. Sellers can specify up to five
     * international shipping services (in five separate shippingService containers, so
     * valid values for international shipping services are 1, 2, 3, 4, and 5.
     * Similarly to domestic shipping service options, the sortOrder value of a
     * international shipping service option controls the placement of that shipping
     * service option in the View Item and Checkout pages. Set up different domestic
     * and international services by configuring two shippingOptions containers, where
     * you set shippingOptions.optionType to either DOMESTIC or INTERNATIONAL to
     * indicate the area supported by the listed shipping services. If the sortOrder
     * field is not supplied, the order of domestic and international shipping service
     * options is determined by the order in which they are listed in the API call.
     * Min: 1. Max: 4 (for domestic shipping service) or 5 (for international shipping
     * service).
     *
     * @var int
     */
    public $sortOrder = null;

    /**
     * Note: DO NOT USE THIS FIELD. Shipping surcharges for shipping service options
     * can no longer be set with fulfillment business policies. To set a shipping
     * surcharge for a shipping service option, only the Shipping rate tables tool in
     * My eBay can be used. The shipping surcharge applicable to the domestic shipping
     * service.
     *
     * @var \Ebay\Sell\Account\Model\Amount
     */
    public $surcharge = null;
}
