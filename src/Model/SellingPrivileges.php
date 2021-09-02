<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A merchant's selling limit, and the status of their account registration.
 */
class SellingPrivileges extends AbstractModel
{
    /**
     * If set to true, the seller's registration is completed.
     *
     * @var bool
     */
    public $sellerRegistrationCompleted = null;

    /**
     * Complex type defining the selling limits for the associated seller account.
     *
     * @var \Ebay\Sell\Account\Model\SellingLimit
     */
    public $sellingLimit = null;
}
