<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Defines the selling limit applied to an eBay seller's account.
 */
class SellingLimit extends AbstractModel
{
    /**
     * The maximum merchandise amount (value and quantity) that a seller can list per
     * calendar month.
     *
     * @var \Ebay\Sell\Account\Model\Amount
     */
    public $amount = null;

    /**
     * The maximum quantity of items that can be listed by the seller per calendar
     * month. Note that for a listing with variations, all of the items listed in the
     * variation count as individual items.
     *
     * @var int
     */
    public $quantity = null;
}
