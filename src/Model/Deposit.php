<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A container that describes the details of a deposit. Used only with motor
 * listings.
 */
class Deposit extends AbstractModel
{
    /**
     * Deposits are used only with Motors listings and the amount value indicates the
     * initial deposit that a buyer must make to purchase a motor vehicle. The deposit
     * amount can be as high as $2,000.00 and if an amount is not specified, this value
     * defaults to '0.0'. If the seller specifies a deposit amount, they must also
     * specify an hoursToDeposit value. Deposits on motor vehicles can only be paid
     * using PayPal, so if you specify a deposit amount, then you must also set the
     * paymentMethodType value to 'PayPal'. Unlike other listings, PayPal is not
     * automatically added to a Motors listing even if the seller has a PayPal
     * preference set in My eBay. Because of these requirements, the seller must have a
     * linked PayPal account in order to require a deposit. The deposit amount appears
     * in the shipping, payment details and return policy section of the View Item
     * page. Min: 0.0, Max: 2000.0, Default: 0.0.
     *
     * @var \Ebay\Sell\Account\Model\Amount
     */
    public $amount = null;

    /**
     * This value indicates the number of hours the buyer has (after they commit to
     * buy) to make an initial deposit to the seller as a down payment on a motor
     * vehicle. Valid values are '24 HOUR', '48 HOUR' (default), and '72 HOUR'. The
     * deposit amount is specified in the deposit.amount field. If not specified, the
     * deposit amount value defaults to '0.0', in which case, a deposit on the vehicle
     * is not required. In order for a buyer to make an initial deposit on a US or CA
     * motor vehicle, you must set a paymentMethodType value to 'PayPal' (in addition
     * to the payment methods offered for the full payment).Min=24 (hours), Max=72
     * (hours), Default=48 (hours).
     *
     * @var \Ebay\Sell\Account\Model\TimeDuration
     */
    public $dueIn = null;

    /**
     * For deposits (which are applicable to only motor listings), the
     * paymentMethodType must be set to 'PAYPAL' and you must also populate the fields
     * in the recipientAccountReference object. Required if your motor vehicles listing
     * requires a deposit.
     *
     * @var \Ebay\Sell\Account\Model\PaymentMethod[]
     */
    public $paymentMethods = null;
}
