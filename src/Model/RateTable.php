<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A complex type that contains information pertaining to a shipping rate table.
 */
class RateTable extends AbstractModel
{
    /**
     * A two-letter ISO 3166 country code representing the eBay marketplace where an
     * item is listed. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $countryCode = null;

    /**
     * The region covered by the shipping rate table, either DOMESTIC or INTERNATIONAL.
     * DOMESTIC indicates that the shipping rate table applies to regions within the
     * country where an item is listed (the source country) while INTERNATIONAL
     * indicates that the shipping rate table applies to regions outside of the country
     * where an item is listed. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $locality = null;

    /**
     * The user-defined name for the shipping rate table. Sellers can access Seller Hub
     * (or My eBay &gt; Account &gt; Site Preferences &gt; Shipping preferences) to
     * create and assign names to their shipping rate tables.
     *
     * @var string
     */
    public $name = null;

    /**
     * A unique eBay-assigned ID for a seller's shipping rate table. Call getRateTables
     * to retrieve the seller's current rate table IDs.
     *
     * @var string
     */
    public $rateTableId = null;
}
