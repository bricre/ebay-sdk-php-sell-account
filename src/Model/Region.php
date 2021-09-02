<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines information for a region.
 */
class Region extends AbstractModel
{
    /**
     * A string that indicates the name of a region, as defined by eBay. A
     * &quot;region&quot; can be either a 'world region' (e.g., the &quot;Middle
     * East&quot; or &quot;Southeast Asia&quot;) or a country, as represented with a
     * two-letter country code. Use GeteBayDetails to get the values accepted by this
     * field. The values that you're allowed to use for a specific regionName field
     * depend on the context in which you are setting the value. For details on how to
     * set the values for this field, see The shipToLocations container.
     *
     * @var string
     */
    public $regionName = null;

    /**
     * Reserved for future use. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:RegionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $regionType = null;
}
