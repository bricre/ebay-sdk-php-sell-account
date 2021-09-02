<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Root container that defines the fields for a seller's payment policy. The
 * paymentPolicy encapsulates a seller's payment terms and consists of payment
 * details for the seller, the name and description of the policy, and the
 * marketplace and category group(s) covered by the payment policy. While each
 * seller must define at least one payment policy for every marketplace into which
 * they sell, sellers can define multiple payment policies for a single marketplace
 * by specifying different configurations for the unique policies.
 */
class PaymentPolicy extends AbstractModel
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
     * This container is applicable only if the categoryTypes.name field is set to
     * MOTORS_VEHICLES. In this case, sellers can use this field to specify amounts and
     * due dates for deposits on motor vehicle listings on eBay Motors. The deposit
     * amount appears in the shipping, payment details, and return policy sections of
     * the View Item page. Note: Deposits on motor vehicles can only be paid using
     * PayPal, so if you specify a deposit amount, then you must set the
     * paymentMethodType value to 'PayPal' (and you must not set the
     * deposit.paymentMethods.brands field). Because of this, the seller needs to have
     * a linked PayPal account in order to require a deposit from the buyer. Also note
     * that paymentMethodType is not automatically set to PayPal for deposits, even if
     * the seller has PayPal set in their My eBay preferences. In addition to setting
     * the paymentMethods for deposits, be sure to also set paymentMethods for the
     * final payment amount.
     *
     * @var \Ebay\Sell\Account\Model\Deposit
     */
    public $deposit = null;

    /**
     * This field applies to motor vehicles listings only and indicates when a final
     * payment for the vehicle is due. This value is always returned if categoryTypes
     * is set to MOTORS_VEHICLES. This seller-specified value indicates the number of
     * days that a buyer has to make their full payment to the seller and close the
     * remaining balance on a motor vehicle transaction. The period starts when the
     * buyer commits to buy. The valid values, as specified with TimeDuration, are: 3
     * DAYS 7 DAYS (the default) 10 DAYS 14 DAYSFor motor vehicles sales (where
     * categoryTypes.name is set to MOTORS_VEHICLES), the payment policy must specify
     * at least one of the following paymentMethods values for the final payment:
     * CASH_ON_PICKUP CASHIER_CHECK LOAN_CHECK MONEY_ORDER PAYPAL PERSONAL_CHECK
     * Default: 7 DAYS (Note that this value is supported by a compound type.).
     *
     * @var \Ebay\Sell\Account\Model\TimeDuration
     */
    public $fullPaymentDueIn = null;

    /**
     * If set to true, payment is due upon receipt (eBay generates a receipt when the
     * buyer agrees to purchase an item). This boolean must be set in the payment
     * policy if the seller wants to create a listing that has an &quot;immediate
     * payment&quot; requirement. The seller can change the immediate payment
     * requirement at any time during the life cycle of a listing. The following must
     * be true before a seller can apply an immediate payment requirement to an item:
     * The seller must have a PayPal Business account. The Buy It Now price cannot be
     * higher than $60,000 USD. The eBay marketplace on which the item is listed must
     * support PayPal payments. The listing type must be fixed-price, or an auction
     * with a Buy It Now option.To enable the immediate payment requirement, the seller
     * must also perform the following actions via API calls: Provide a valid
     * paymentMethods.recipientAccountReference.referenceId value. Offer PayPal as the
     * only payment method for the item(s). Specify all related costs to the buyer
     * (because the buyer is not be able to use the Buyer Request Total feature in an
     * immediate payment listing); these costs include flat-rate shipping costs for
     * each domestic and international shipping service offered, package handling
     * costs, and any shipping surcharges. Include and set the
     * shippingProfileDiscountInfo container values if you are going to use promotional
     * shipping discounts.For more information, see the Understanding immediate payment
     * Help page. Note: Listings created with the Inventory API must reference a
     * payment policy that has immediatePay is set to true. Items listed with the
     * Inventory API must also be fixed-price good-till-canceled (GTC) listings where
     * PayPal is the only supported payment method (paymentMethod must be set to
     * PAYPAL). Default: false.
     *
     * @var bool
     */
    public $immediatePay = null;

    /**
     * The ID of the eBay marketplace to which the payment policy applies. If this
     * value is not specified, value defaults to the seller's eBay registration site.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * A user-defined name for this payment policy. Names must be unique for policies
     * assigned to the same marketplace. Max length: 64.
     *
     * @var string
     */
    public $name = null;

    /**
     * This free-form string field gives sellers the ability add detailed payment
     * instructions to their listings. The payment instructions appear on eBay's View
     * Item and Checkout pages. eBay recommends sellers use this field to clarify
     * payment policies for motor vehicle listings on eBay Motors. For example, sellers
     * can include the specifics on the deposit (if required), pickup/delivery
     * arrangements, and full payment details on the vehicle. The field allows only 500
     * characters as input, but due to the way the eBay web site UI treats characters,
     * this field can return more than 500 characters in the response. For example,
     * characters like &amp; and ' (ampersand and single quote) count as 5 characters
     * each. Max length: 1000.
     *
     * @var string
     */
    public $paymentInstructions = null;

    /**
     * If the seller is not opted-in to managed payments, this container returns a list
     * of the payment methods accepted by the seller. When not opted-in to managed
     * payments, each payment policy must specify at least one payment method. Note:
     * The paymentMethods container is not returned if the seller is opted-in to the
     * managed payments program.
     *
     * @var \Ebay\Sell\Account\Model\PaymentMethod[]
     */
    public $paymentMethods = null;

    /**
     * A unique eBay-assigned ID for a payment policy. This ID is generated when the
     * policy is created.
     *
     * @var string
     */
    public $paymentPolicyId = null;
}
