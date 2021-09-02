<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields for a seller's international return policy. If a
 * seller does not populate the fields in this complex type, the international
 * return policy defaults to the return policy set for domestic returns.
 */
class InternationalReturnOverrideType extends AbstractModel
{
    /**
     * Valid in the US marketplace only, this optional field indicates additional
     * services (other than money-back) that sellers can offer buyers for remorse
     * returns. As of version 1.2.0, the only accepted value for this field is
     * REPLACEMENT. This field is valid in only the US marketplace, any supplied value
     * is ignored in other marketplaces. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnMethod = null;

    /**
     * Specifies the amount of time the buyer has to return an item. The return period
     * begins when the item is marked &quot;delivered&quot; at the buyer's specified
     * ship-to location. You must set the value to one that's accepted by the
     * marketplace and category where the item is listed. Most categories support
     * 30-day and 60-day return periods. For a definitive list of category return
     * periods, call GeteBayDetails in the Trading API with DetailName set to
     * ReturnPolicyDetails. In the response review the
     * ReturnPolicyDetails.ReturnsWithin field to see the values supported in the
     * different marketplace categories. Note: In version 1.2.0, the options for this
     * field were reduced. See the Release Notes for details. Set this field using the
     * TimeDuration complex type, where you set unit to DAY and value to either 30 or
     * 60 (or other value, as appropriate). Note that this value cannot be modified if
     * the listing has bids or sales, or if the listing ends within 12 hours. Required
     * if the internationalOverride.returnsAccepted field is set to true.
     *
     * @var \Ebay\Sell\Account\Model\TimeDuration
     */
    public $returnPeriod = null;

    /**
     * If set to true, the seller allows international returns. If set to false, the
     * seller does not accept international returns. Required if the seller wants to
     * set an international return policy that differs from their domestic return
     * policy.
     *
     * @var bool
     */
    public $returnsAccepted = null;

    /**
     * This field indicates who is responsible for paying for the shipping charges for
     * returned items. The field can be set to either BUYER or SELLER. Depending on the
     * return policy and specifics of the return, either the buyer or the seller can be
     * responsible for the return shipping costs. Note that the seller is always
     * responsible for return shipping costs for SNAD-related issues. Required if the
     * internationalOverride.returnsAccepted field is set to true. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnShippingCostPayer = null;
}
