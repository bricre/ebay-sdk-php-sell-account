<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response container for with information on a seller's shipping rate tables.
 */
class RateTableResponse extends AbstractModel
{
    /**
     * A list of elements that provide information on the seller-defined shipping rate
     * tables.
     *
     * @var \Ebay\Sell\Account\Model\RateTable[]
     */
    public $rateTables = null;
}
