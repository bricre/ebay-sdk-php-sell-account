<?php

namespace Ebay\Sell\Account\Api;

use Ebay\Sell\Account\Model\SalesTax as SalesTaxModel;
use Ebay\Sell\Account\Model\SalesTaxBase as SalesTaxBase;
use Ebay\Sell\Account\Model\SalesTaxes as SalesTaxes;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class SalesTax extends AbstractAPI
{
    /**
     * This call gets the current tax table entry for a specific tax jurisdiction.
     * Specify the jurisdiction to retrieve using the countryCode and jurisdictionId
     * path parameters.
     *
     * @param string $countryCode    this path parameter specifies the two-letter ISO 3166
     *                               code for the country whose tax table you want to retrieve
     * @param string $jurisdictionId this path parameter specifies the ID of the sales
     *                               tax jurisdiction for the tax table entry you want to retrieve
     *
     * @return SalesTaxModel
     */
    public function get(string $countryCode, string $jurisdictionId): SalesTaxModel
    {
        return $this->client->request('getSalesTax', 'GET', "sales_tax/{$countryCode}/{$jurisdictionId}",
            [
            ]
        );
    }

    /**
     * This method creates or updates a sales tax table entry for a jurisdiction.
     * Specify the tax table entry you want to configure using the two path parameters:
     * countryCode and jurisdictionId. A tax table entry for a jurisdiction is
     * comprised of two fields: one for the jurisdiction's sales-tax rate and another
     * that's a boolean value indicating whether or not shipping and handling are taxed
     * in the jurisdiction. You can set up tax tables for countries that support
     * different tax jurisdictions. Currently, only Canada, India, and the US support
     * separate tax jurisdictions. If you sell into any of these countries, you can set
     * up tax tables for any of the country's jurisdictions. Retrieve valid
     * jurisdiction IDs using getSalesTaxJurisdictions in the Metadata API. For details
     * on using this call, see Establishing sales-tax tables. Important! Starting in
     * January 2019, eBay will begin to calculate, collect, and remit sales tax on
     * behalf of sellers for items shipped to customers. This feature is rolling out on
     * specific dates to specific US states as defined on the following page: eBay
     * sales tax collection. Once eBay starts to collect sales tax for a state, no
     * action is required on the seller's part and there will be no charges or fees for
     * eBay automatically calculating, collecting and remitting sales tax. The
     * sales-tax collection process will apply to all the sales in the states that
     * support this feature, whether the seller is located in or outside of the United
     * States. When a buyer purchases an item on eBay, and the ship-to address is one
     * of the states where eBay collects the sales tax, eBay will calculate and add the
     * applicable sales tax at checkout. The buyer will pay both the cost of the item
     * along with the sales tax. eBay will collect and remit the tax.
     *
     * @param string       $countryCode    this path parameter specifies the two-letter ISO 3166
     *                                     code for the country for which you want to create tax table entry
     * @param string       $jurisdictionId this path parameter specifies the ID of the
     *                                     sales-tax jurisdiction for the table entry you want to create
     * @param SalesTaxBase $Model          a container that describes the how the sales tax is
     *                                     calculated
     *
     * @return mixed
     */
    public function createOrReplace(string $countryCode, string $jurisdictionId, SalesTaxBase $Model)
    {
        return $this->client->request('createOrReplaceSalesTax', 'PUT', "sales_tax/{$countryCode}/{$jurisdictionId}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This call deletes a tax table entry for a jurisdiction. Specify the jurisdiction
     * to delete using the countryCode and jurisdictionId path parameters.
     *
     * @param string $countryCode    this path parameter specifies the two-letter ISO 3166
     *                               code for the country whose tax table entry you want to delete
     * @param string $jurisdictionId this path parameter specifies the ID of the sales
     *                               tax jurisdiction whose table entry you want to delete
     *
     * @return mixed
     */
    public function delete(string $countryCode, string $jurisdictionId)
    {
        return $this->client->request('deleteSalesTax', 'DELETE', "sales_tax/{$countryCode}/{$jurisdictionId}",
            [
            ]
        );
    }

    /**
     * Use this call to retrieve a sales tax table that the seller established for a
     * specific country. Specify the tax table to retrieve using the country_code query
     * parameter.
     *
     * @param array $queries options:
     *                       'country_code'	string	This path parameter specifies the two-letter ISO 3166 code
     *                       for the country whose tax table you want to retrieve. For implementation help,
     *                       refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum
     *
     * @return SalesTaxes
     */
    public function getes(array $queries = []): SalesTaxes
    {
        return $this->client->request('getSalesTaxes', 'GET', 'sales_tax',
            [
                'query' => $queries,
            ]
        );
    }
}
