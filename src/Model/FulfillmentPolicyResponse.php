<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response payload for requests that return a list of fulfillment policies.
 */
class FulfillmentPolicyResponse extends AbstractModel
{
    /**
     * A list of the seller's fulfillment policies.
     *
     * @var \Ebay\Sell\Account\Model\FulfillmentPolicy[]
     */
    public $fulfillmentPolicies = null;

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
}
