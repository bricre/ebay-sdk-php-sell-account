<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This root container defines a seller's payment policy for a specific marketplace
 * and category type. Used when creating or updating a payment policy,
 * paymentPolicyRequest encapsulates a seller's terms for how buyers can pay for
 * the items they buy. While each seller must define at least one payment policy
 * for every marketplace into which they sell, sellers can define multiple payment
 * policies for a single marketplace by specifying different configurations for the
 * unique policies. A successful call returns a paymentPolicyId, plus the Location
 * response header contains the URI to the resource. Policy instructions can be
 * localized by providing a locale in the Content-Language HTTP request header. For
 * example: Content-Language: de-DE. Tip: For more on using business policies, see
 * eBay business policies.
 */
class PaymentPolicyRequest extends AbstractModel
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
     * The specified amounts and due dates for motor vehicle deposits on eBay Motors
     * listings. The deposit amount appears in the shipping, payment details, and
     * return policy sections of the View Item page. Deposits on motor vehicles can
     * only be paid using PayPal. If you specify a deposit amount, then you must set
     * the paymentMethodType value to PayPal, and you must not set the
     * deposit.paymentMethods.brands field. The seller must have a linked PayPal
     * account in order to require a deposit from the buyer. Note: The
     * paymentMethodType is not automatically set to PayPal for deposits, even if the
     * seller has PayPal set in their My eBay preferences.In addition to setting the
     * paymentMethods for deposits, you must also set the paymentMethods for the final
     * payment amount. Restrictions: This container is applicable only if the
     * categoryTypes.name field is set to MOTORS_VEHICLES. This container is not
     * supported for sellers who opt-in to the managed payments program. Managed
     * payments does not currently support the sale of motor vehicles.
     *
     * @var \Ebay\Sell\Account\Model\Deposit
     */
    public $deposit = null;

    /**
     * The number of days that a buyer has to make their full payment to the seller and
     * close the remaining balance on a motor vehicle transaction. This container
     * applies to motor vehicles listings only and indicates when a final payment for
     * the vehicle is due. Note: This value is always returned if categoryTypes is set
     * to MOTORS_VEHICLES.The period starts when the buyer commits to buy. The valid
     * values, as specified with TimeDuration, are: 3 DAYS 7 DAYS (the default) 10 DAYS
     * 14 DAYSIn order for a buyer to make a full payment on a US or CA motor vehicle,
     * at least one of the following paymentMethods values must be specified for the
     * corresponding payment policy: CASH_ON_PICKUP CASHIER_CHECK LOAN_CHECK
     * MONEY_ORDER PAYPAL PERSONAL_CHECKRestriction: This container is not supported
     * for sellers who opt-in to the managed payments program. Managed payments does
     * not currently support the sale of motor vehicles. Default: 7 DAYS (this value is
     * supported by a compound type).
     *
     * @var \Ebay\Sell\Account\Model\TimeDuration
     */
    public $fullPaymentDueIn = null;

    /**
     * If set to true, payment is due upon receipt (eBay generates a receipt when the
     * buyer agrees to purchase an item). This boolean must be set in the payment
     * policy if the seller wants to create a listing that has an immediate payment
     * requirement. The seller can change the immediate payment requirement at any time
     * during the life cycle of a listing. The following must be true before a seller
     * can apply an immediate payment requirement to an item: The seller must have a
     * PayPal Business account. The Buy It Now price cannot be higher than $60,000 USD.
     * The eBay marketplace on which the item is listed must support PayPal payments.
     * The listing type must be fixed-price, or an auction with a Buy It Now option.
     * Note: This container can be used for sellers who opt-in to the managed payments
     * program, but some requirements do not apply.To enable the immediate payment
     * requirement, the seller must also perform the following actions via API calls:
     * Provide a valid paymentMethods.recipientAccountReference.referenceId value.
     * Offer PayPal as the only payment method for the item(s). Specify all related
     * costs to the buyer (because the buyer is not able to use the Buyer Request Total
     * feature in an immediate payment listing); these costs include flat-rate shipping
     * costs for each domestic and international shipping service offered, package
     * handling costs, and any shipping surcharges. Include and set the
     * shippingProfileDiscountInfo container values if you are going to use promotional
     * shipping discounts.For more information, see the Understanding immediate payment
     * Help page. Note: Listings created with the Inventory API must reference a
     * payment policy that has immediatePay set to true. Items listed with the
     * Inventory API must also be fixed-price, good-till-canceled (GTC) listings where
     * PayPal is the only supported payment method (paymentMethod must be set to
     * PAYPAL).Default: False.
     *
     * @var bool
     */
    public $immediatePay = null;

    /**
     * The ID of the eBay marketplace to which this payment policy applies. If this
     * value is not specified, the value defaults to the seller's eBay registration
     * site. Note: A limited number of sellers, on a limited number of eBay
     * marketplaces, are currently opted-in to the eBay managed payments program. To
     * view the eBay marketplaces where managed payments are currently supported, see
     * the managed payments landing page. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * A user-defined name for this payment policy. Names must be unique for policies
     * assigned to the same marketplace. Note: eBay will create a new payment policy
     * for sellers who opt-in to the managed payments program.Max length: 64.
     *
     * @var string
     */
    public $name = null;

    /**
     * A free-form string field that allows sellers to add detailed payment
     * instructions to their listings. The payment instructions appear on eBay's View
     * Item and Checkout pages. eBay recommends sellers use this field to clarify
     * payment policies for motor vehicle listings on eBay Motors. For example, sellers
     * can include the specifics on the deposit (if required), pickup/delivery
     * arrangements, and full payment details on the vehicle. The field allows only 500
     * characters as input, but due to the way the eBay web site UI treats characters,
     * this field can return more than 500 characters in the response. For example,
     * characters like &amp; and ' (ampersand and single quote) count as 5 characters
     * each. Restriction: This container is not supported for sellers who opt-in to the
     * managed payments program. Max length: 1000.
     *
     * @var string
     */
    public $paymentInstructions = null;

    /**
     * A list of the payment methods accepted by the seller. Important: Do not populate
     * this container if you are opted-in to managed payments. To verify whether or not
     * you are opted-in to the managed payments program, call getPaymentsProgram. If
     * you are not opted-in to the managed payments program, each payment policy you
     * create must specify at least one payment method. In addition, if you are not
     * opted-in to managed payments, the listings you create with the Inventory API
     * must reference a payment policy that has this value set to PAYPAL (currently,
     * the Inventory API supports only fixed-prince GTC items with immediate pay (which
     * required payments to be made via PayPal). In order for a buyer to make a full
     * payment on a US or CA motor vehicle, the payment policy must specify at least
     * one of the following as a payment method: CashOnPickup LoanCheck MOCC (money
     * order or cashier's check) PaymentSeeDescription (payment instructions are in the
     * paymentInstructions field) PersonalCheck Note: Each eBay marketplace supports
     * and requires its own set of payment methods and not all marketplaces support the
     * same set of payment methods. Check the specifics of the marketplaces where you
     * list items to ensure your payment policies meet the payment method requirements
     * needed for any specific listing.
     *
     * @var \Ebay\Sell\Account\Model\PaymentMethod[]
     */
    public $paymentMethods = null;
}
