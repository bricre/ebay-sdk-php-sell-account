<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type contains the regionIncluded and regionExcluded fields, which
 * indicate the areas to where the seller does and doesn't ship. Normally a seller
 * ships to as many areas as possible using both DOMESTIC and INTERNATIONAL
 * shipping options, and they don't have a need to exclude any regions from their
 * ship-to locations. Here, there's no reason to set regionExcluded fields.
 * However, it makes sense to set the regionExcluded field when a seller wants to
 * exclude a small area that's within a larger area they service. For example,
 * suppose a seller indicates they ship 'Worldwide', but for some reason must
 * exclude a specific country, or world region. Note: Configuring the
 * shipToLocations is tricky because the regionIncluded and regionExcluded fields
 * are valid in different parts of the schema and their allowable settings vary
 * upon the context. For details on setting these fields, see .
 */
class RegionSet extends AbstractModel
{
    /**
     * A list of one or more regionsName fields that specify the areas to where a
     * seller does not ship. Populate regionExcluded in only the top-level
     * shipToLocations container (do not populate this field within the shippingOptions
     * container). Normally a seller ships to as many areas as possible using both
     * DOMESTIC and INTERNATIONAL shipping options and they don't have a need to
     * exclude any regions from their ship-to locations. With this, there's no reason
     * to set regionExclude fields. However, it makes sense to set the regionExcluded
     * field when a seller wants to exclude a small area that's located within a larger
     * area they service. For example, suppose a seller indicates they ship
     * 'Worldwide', but for some reason must exclude a specific country, or world
     * region, from the larger world area they ship to. To retrieve the regions you can
     * specify in the associated regionName field, call GeteBayDetails with DetailName
     * set to ExcludeShippingLocationDetails, then review the Location fields in the
     * response for the strings that you can specify regionExcluded.regionName. Note
     * that if a buyer's primary ship-to location is a region that a seller has
     * excluded in their fulfillment policy (or if the buyer does not have a primary
     * ship-to location), they will receive an error message if they attempt to buy or
     * place a bid on an item that uses that fulfillment policy. For details on setting
     * this field, see Excluding specific regions from included shipping areas.
     *
     * @var \Ebay\Sell\Account\Model\Region[]
     */
    public $regionExcluded = null;

    /**
     * A list of one or more regionsName fields that specify the areas to where a
     * seller ships. Important: Populate this field only when the parent
     * shipToLocations object is located within a shippingOptions container (that is,
     * the parent shipTolocations object must not be the one at the top-level of the
     * policy). Also, this field needs to be populated only when the associated
     * shippingOptions container has optionType set to INTERNATIONAL. Withing an
     * international shipping option, set this value to Worldwide to indicate the
     * seller ships to all world regions. If needed, use the regionExcluded field to
     * exclude any regions in the world to where the seller does not ship. Each eBay
     * marketplace supports its own set of allowable shipping locations. Obtain the
     * valid 'Ship-To Locations' for a marketplace by calling GeteBayDetails with
     * DetailName set to ShippingLocationDetails, then review the ShippingLocation
     * fields in the response for the strings that you can specify in the
     * regionIncluded.regionName field. For DOMESTIC shipping options, eBay
     * automatically uses the seller's listing country as the default regionIncluded
     * country. For details on setting this field, see How to set up worldwide
     * shipping. This field is always returned in the shipping policy response.
     * Required if optionType set to INTERNATIONAL.
     *
     * @var \Ebay\Sell\Account\Model\Region[]
     */
    public $regionIncluded = null;
}
