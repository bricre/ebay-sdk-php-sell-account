<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A list of sales tax tables.
 */
class SalesTaxes extends AbstractModel
{
    /**
     * A list of sales tax tables that have been set up by a seller.
     *
     * @var \Ebay\Sell\Account\Model\SalesTax[]
     */
    public $salesTaxes = null;
}
