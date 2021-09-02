<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Complex type that that gets populated with a response containing a return
 * policy.
 */
class SetReturnPolicyResponse extends AbstractModel
{
    /**
     * For return policies, this field always returns ALL_EXCLUDING_MOTORS_VEHICLES
     * (returns on motor vehicles are not processed through eBay flows.) Default:
     * ALL_EXCLUDING_MOTORS_VEHICLES (for return policies only).
     *
     * @var \Ebay\Sell\Account\Model\CategoryType[]
     */
    public $categoryTypes = null;

    /**
     * Important! This field has been deprecated as of version 1.2.0, released on May
     * 31, 2018. Any value supplied in this field is ignored, it is neither read nor
     * returned. If set to true, the seller offers an Extended Holiday Returns policy
     * for their listings. IMPORTANT: Extended Holiday Returns is a seasonally
     * available feature that is offered on some eBay marketplaces. To see if the
     * feature is enabled in any given year, check the eBay Seller Center Returns on
     * eBay page of before the holiday season begins.
     *
     * @var bool
     */
    public $extendedHolidayReturnsOffered = null;

    /**
     * This container, if populated, specifies the seller's policies for international
     * returns (items that require postage via an international shipping service). Buy
     * default, the policies for international returns are inherited from the domestic
     * return policy. This container allows the seller to customize the return policy
     * for international returns.
     *
     * @var \Ebay\Sell\Account\Model\InternationalReturnOverrideType
     */
    public $internationalOverride = null;

    /**
     * The ID of the eBay marketplace to which this return policy applies. If this
     * value is not specified, value defaults to the seller's eBay registration site.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * A user-defined name for this return policy. Names must be unique for policies
     * assigned to the same marketplace. Max length: 64.
     *
     * @var string
     */
    public $name = null;

    /**
     * Important! This field has been deprecated as of version 1.2.0, released on May
     * 31, 2018. Any value other than MONEY_BACK will be treated as MONEY_BACK
     * (although for a period of time, eBay will store and return the legacy values to
     * preserve backwards compatibility). Indicates the method the seller uses to
     * compensate the buyer for returned items. The return method specified applies
     * only to remorse returns. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:RefundMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $refundMethod = null;

    /**
     * Important! This field has been deprecated as of version 1.2.0, released on May
     * 31, 2018. Any value supplied in this field is ignored, it is neither read nor
     * returned. Optionally set by the seller, the percentage charged if the seller
     * charges buyers a a restocking fee when items are returned due to buyer remorse
     * and/or a purchasing mistake. The total amount charged to the buyer is the cost
     * of the item multiplied by the percentage indicated in this field.
     *
     * @var string
     */
    public $restockingFeePercentage = null;

    /**
     * This field contains the seller's detailed explanation for their return policy
     * and is displayed in the Return Policy section of the View Item page. This field
     * is valid in only the following marketplaces (the field is otherwise ignored):
     * Germany (DE) Spain (ES) France (FR) Italy (IT).
     *
     * @var string
     */
    public $returnInstructions = null;

    /**
     * This field indicates the method in which the seller handles non-money back
     * return requests for remorse returns. This field is valid in only the US
     * marketplace and the only valid value is REPLACEMENT. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnMethod = null;

    /**
     * Specifies the amount of time the buyer has to return an item. The return period
     * begins when the item is marked &quot;delivered&quot; at the buyer's specified
     * ship-to location.
     *
     * @var \Ebay\Sell\Account\Model\TimeDuration
     */
    public $returnPeriod = null;

    /**
     * A unique eBay-assigned ID for a return policy. This ID is generated when the
     * policy is created.
     *
     * @var string
     */
    public $returnPolicyId = null;

    /**
     * If set to true, the seller accepts returns. If set to false, this field
     * indicates that the seller does not accept returns.
     *
     * @var bool
     */
    public $returnsAccepted = null;

    /**
     * This field indicates who is responsible for paying for the shipping charges for
     * returned items. The field can be set to either BUYER or SELLER. Depending on the
     * return policy and specifics of the return, either the buyer or the seller can be
     * responsible for the return shipping costs. Note that the seller is always
     * responsible for return shipping costs for SNAD-related issues. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnShippingCostPayer = null;

    /**
     * A list of warnings related to request. This field normally returns empty, which
     * indicates the request did not generate any warnings.
     *
     * @var \Ebay\Sell\Account\Model\Error[]
     */
    public $warnings = null;
}
