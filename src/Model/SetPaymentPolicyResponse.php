<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Complex type that that gets populated with a response containing a payment
 * policy.
 */
class SetPaymentPolicyResponse extends AbstractModel
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
     * return policy sections of the View Item page. Restrictions: This container is
     * applicable only if the categoryTypes.name field is set to MOTORS_VEHICLES. This
     * container is not supported for sellers who opt-in to the managed payments
     * program. Managed payments does not currently support the sale of motor vehicles.
     *
     * @var \Ebay\Sell\Account\Model\Deposit
     */
    public $deposit = null;

    /**
     * The number of days that a buyer has to make their full payment to the seller and
     * close the remaining balance on a motor vehicle transaction. This container
     * applies to motor vehicles listings only and indicates when a final payment for
     * the vehicle is due. Note: This value is always returned if categoryTypes is set
     * to MOTORS_VEHICLES. Restriction: This container is not supported for sellers who
     * opt-in to the managed payments program. Managed payments does not currently
     * support the sale of motor vehicles.
     *
     * @var \Ebay\Sell\Account\Model\TimeDuration
     */
    public $fullPaymentDueIn = null;

    /**
     * If set to true, payment is due upon receipt (eBay generates a receipt when the
     * buyer agrees to purchase an item). The items will be available for other buyers
     * until the payment is complete. This boolean must be set in the payment policy if
     * the seller wants to create a listing that has an immediate payment requirement.
     * Note: This container can be used for sellers who opt-in to the managed payments
     * program, but some requirements do not apply.Default: False.
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

    /**
     * A list of warnings related to request. This field normally returns empty, which
     * indicates the request did not generate any warnings.
     *
     * @var \Ebay\Sell\Account\Model\Error[]
     */
    public $warnings = null;
}
