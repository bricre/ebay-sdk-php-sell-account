<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The applicable sales tax rate, as a percentage of the sale amount, for a given
 * country and sales tax jurisdiction within that country.
 */
class SalesTax extends AbstractModel
{
    /**
     * The country code identifying the country to which this tax rate applies. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $countryCode = null;

    /**
     * A unique ID that identifies the sales tax jurisdiction to which the tax rate
     * applies (for example a state within the United States).
     *
     * @var string
     */
    public $salesTaxJurisdictionId = null;

    /**
     * The sales tax rate (as a percentage of the sale) applied to sales transactions
     * made in this country and sales tax jurisdiction.
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
