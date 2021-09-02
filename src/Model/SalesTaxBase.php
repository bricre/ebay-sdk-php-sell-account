<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A container that describes the how the sales tax rate is calculated.
 */
class SalesTaxBase extends AbstractModel
{
    /**
     * The sales tax rate, as a percentage of the sale.
     *
     * @var string
     */
    public $salesTaxPercentage = null;

    /**
     * If set to true, shipping and handling charges are taxed.
     *
     * @var bool
     */
    public $shippingAndHandlingTaxed = null;
}
