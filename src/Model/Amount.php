<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A complex type that describes the value of a monetary amount as represented by a
 * global currency.
 */
class Amount extends AbstractModel
{
    /**
     * The base currency applied to the value field to establish a monetary amount. The
     * currency is represented as a 3-letter ISO 4217 currency code. For example, the
     * code for the Canadian Dollar is CAD. Default: The default currency of the eBay
     * marketplace that hosts the listing. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The monetary amount in the specified currency. Required in the amount type.
     *
     * @var string
     */
    public $value = null;
}
