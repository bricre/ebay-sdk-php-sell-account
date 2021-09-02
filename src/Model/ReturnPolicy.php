<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Root container that defines the fields for a seller's return policy. The
 * returnPolicy encapsulates a seller's terms for how they handle item returns, the
 * name and description of the policy, and the marketplace and category group(s) to
 * which the return policy is applied. While each seller must define at least one
 * return policy for every marketplace into which they sell, sellers can define
 * multiple return policies for a single marketplace by specifying different
 * configurations for the unique policies.
 */
class ReturnPolicy extends AbstractModel
{
    /**
     * For return policies, this field can be set to only ALL_EXCLUDING_MOTORS_VEHICLES
     * (returns on motor vehicles are not processed through eBay flows) Default:
     * ALL_EXCLUDING_MOTORS_VEHICLES (for return policies only).
     *
     * @var \Ebay\Sell\Account\Model\CategoryType[]
     */
    public $categoryTypes = null;

    /**
     * Important! This field has been deprecated as of version 1.2.0, released on May
     * 31, 2018. Any value supplied in this field is neither read nor returned. If set
     * to true, the seller offers an Extended Holiday Returns policy for their
     * listings. IMPORTANT: Extended Holiday Returns is a seasonally available feature
     * that is offered on some eBay marketplaces. To see if the feature is enabled in
     * any given year, check the Returns on eBay page before the holiday season begins.
     * If the feature is not enabled for the season, this field is ignored. The
     * extended holiday returns period is defined by three dates: The start date =
     * start of November. The purchase cutoff date = end of the year. The end date =
     * end of January. The above dates may vary by a few days each year. Sellers are
     * notified of the current dates on their eBay marketplace before the holiday
     * period starts. Sellers can specify Extended Holiday Returns (as well as their
     * regular non-holiday returns period) for chosen listings at any time during the
     * year. The Extended Holiday Returns offer is not visible in listings until the
     * start date of current year's holiday returns period, at which point it overrides
     * the non-holiday returns policy. Buyers can see the Extended Holiday Returns
     * offer in listings displayed through the purchase cutoff date and are able to
     * return those purchases until the end date of the period. After the purchase
     * cutoff date, the Extended Holiday Returns offer automatically disappears from
     * the listings and the seller's non-holiday returns period reappears. Purchases
     * made from that point on are subject to the non-holiday returns period, while
     * purchases made before the cutoff date still have until the end of the period to
     * return under the program. If the value of holidayReturns is false for an item,
     * the return period specified by the returnsWithinOption field applies, regardless
     * of the purchase date. If the item is listed with a policy of no returns,
     * holidayReturns is automatically reset to false.
     *
     * @var bool
     */
    public $extendedHolidayReturnsOffered = null;

    /**
     * This container, if populated, specifies the seller's policies for international
     * returns (items that require postage via an international shipping service). Buy
     * default, the policies for international returns are inherited from the domestic
     * return policy. This container allows the seller to customize their return policy
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
     * Important! this field has been deprecated as of version 1.2.0, released on May
     * 31, 2018. Any value other than MONEY_BACK will be treated as MONEY_BACK
     * (although for a period of time, eBay will store and return the legacy values to
     * preserve backwards compatibility). Indicates the method the seller uses to
     * compensate the buyer for returned items. The return method specified applies
     * only to remorse returns. Each eBay marketplace may support different sets of
     * refund methods and marketplaces can also have differing default values for this
     * field. Sellers are obligated to honor the refund method displayed in their
     * listings. Call GeteBayDetails in the Trading API to see the refund methods
     * supported by the marketplaces you sell into. We recommend you set this field to
     * the value of your preferred refund method and that you use the description field
     * to detail the seller's return policy (such as indicating how quickly the seller
     * will process a refund, whether the seller must receive the item before
     * processing a refund, and other similar useful details). You cannot modify this
     * value in a Revise item call if (1) the listing has bids or (2) the listing ends
     * within 12 hours. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:RefundMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $refundMethod = null;

    /**
     * Important! This field has been deprecated as of version 1.2.0, released on May
     * 31, 2018. Any value supplied in this field is ignored, it is neither read nor
     * returned. Sellers who accept returns should include this field if they charge
     * buyers a restocking fee when items are returned. A restocking fee comes into
     * play only when an item is returned due to buyer remorse and/or a purchasing
     * mistake, but sellers cannot charge a restocking fee for SNAD-related returns.
     * The total amount returned to the buyer is reduced by the cost of the item
     * multiplied by the percentage indicated by this field. Allowable restocking fee
     * values are: 0.0: No restocking fee is charged to the buyer 10.0: 10 percent of
     * the item price is charged to the buyer 15.0: 15 percent of the item price is
     * charged to the buyer 20.0: Up to 20 percent of the item price is charged to the
     * buyer.
     *
     * @var string
     */
    public $restockingFeePercentage = null;

    /**
     * Important! This field is being deprecated on many marketplaces. Once deprecated,
     * this field will be ignored on marketplaces where it is not supported and it will
     * neither be read nor returned. This optional field contains the seller's detailed
     * explanation for their return policy and is displayed in the Return Policy
     * section of the View Item page. This field is valid in only the following
     * marketplaces (the field is otherwise ignored): Germany (DE) Spain (ES) France
     * (FR) Italy (IT) Where valid, sellers can use this field to add details about
     * their return policies. eBay uses this text string as-is in the Return Policy
     * section of the View Item page. Avoid HTML and avoid character entity references
     * (such as &amp;amp;pound; or &amp;amp;#163;). To include special characters in
     * the return policy description, use the literal UTF-8 or ISO-8559-1 character
     * (e.g. &amp;#163;). Max length: 5000 (8000 for DE).
     *
     * @var string
     */
    public $returnInstructions = null;

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
     * 30-day and 60-day return periods; be sure the value you set in this field is
     * applicable to the marketplace category where you use the return policy. For a
     * definitive list of category return periods, call GeteBayDetails in the Trading
     * API with DetailName set to ReturnPolicyDetails. In the response review the
     * ReturnPolicyDetails.ReturnsWithin field to see the values supported in the
     * different marketplace categories. Note: In version 1.2.0, the options for this
     * field were reduced. See the Release Notes for details. Set this field using the
     * TimeDuration complex type, where you set unit to DAY and value to either 30 or
     * 60 (or other value, as appropriate). Note that this value cannot be modified if
     * the listing has bids or sales, or if the listing ends within 12 hours.
     *
     * @var \Ebay\Sell\Account\Model\TimeDuration
     */
    public $returnPeriod = null;

    /**
     * A unique eBay-assigned ID for this policy. This ID value is appended to the end
     * of the Location URI that is returned as a response header when you call
     * createReturnPolicy).
     *
     * @var string
     */
    public $returnPolicyId = null;

    /**
     * If set to true, the seller accepts returns. Call the getReturnPolicies in the
     * Metadata API to see what categories require returns to be offered for listings
     * in each category. Also, note that some European marketplaces (for example, UK,
     * IE, and DE) require sellers to accept returns for fixed-price items and auctions
     * listed with Buy It Now. For details, see Returns and the Law (UK).
     * Note:Top-Rated sellers must accept item returns and the handlingTime should be
     * set to zero days or one day for a listing to receive a Top-Rated Plus badge on
     * the View Item or search result pages. For more information on eBay's Top-Rated
     * seller program, see Becoming a Top Rated Seller and qualifying for Top Rated
     * Plus benefits.
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
}
