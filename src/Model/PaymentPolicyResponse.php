<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response payload for payment policy requests.
 */
class PaymentPolicyResponse extends AbstractModel
{
    /**
     * This field is for future use.
     *
     * @var string
     */
    public $href = null;

    /**
     * This field is for future use.
     *
     * @var int
     */
    public $limit = null;

    /**
     * This field is for future use.
     *
     * @var string
     */
    public $next = null;

    /**
     * This field is for future use.
     *
     * @var int
     */
    public $offset = null;

    /**
     * This field is for future use.
     *
     * @var string
     */
    public $prev = null;

    /**
     * The total number of items retrieved in the result set. If no items are found,
     * this field is returned with a value of 0.
     *
     * @var int
     */
    public $total = null;

    /**
     * A list of the seller's payment policies.
     *
     * @var \Ebay\Sell\Account\Model\PaymentPolicy[]
     */
    public $paymentPolicies = null;
}
