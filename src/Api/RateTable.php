<?php

namespace Ebay\Sell\Account\Api;

use Ebay\Sell\Account\Model\RateTableResponse as RateTableResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class RateTable extends AbstractAPI
{
    /**
     * This method retrieves a seller's shipping rate tables for the country specified
     * in the country_code query parameter. If you call this method without specifying
     * a country code, the call returns all the seller's shipping rate tables. The
     * method's response includes a rateTableId for each table defined by the seller.
     * Use a table's ID value in a fulfillment policy to specify the shipping rate
     * table to use for that policy's DOMESTIC or INTERNATIONAL shipping option (make
     * sure the locality of the rate table matches the optionType of the shipping
     * option). This call currently supports getting rate tables related to the
     * following marketplaces: EBAY_AU EBAY_CA EBAY_DE EBAY_ES EBAY_FR EBAY_GB EBAY_IT
     * EBAY_US Note: Rate tables created with the Trading API might not have been
     * assigned a rateTableId at the time of their creation. This method can assign and
     * return rateTableId values for rate tables with missing IDs if you make a request
     * using the country_code where the seller has defined rate tables. Sellers can
     * define up to 40 shipping rate tables for their account, which lets them set up
     * different rate tables for each of the marketplaces they sell into. Go to My eBay
     * &gt; Account &gt; Site Preferences to create and maintain the rate tables. For
     * more, see Using shipping rate tables. If you're using the Trading API, use the
     * rate table ID values in the RateTableDetails container of the Add/Revise/Relist
     * calls. If the locality for a rate table is set to DOMESTIC, pass the ID value in
     * the RateTableDetails.DomesticRateTableId field. Otherwise, if locality is
     * INTERNATIONAL, pass the ID value in RateTableDetails.InternationalRateTableId.
     *
     * @param array $queries options:
     *                       'country_code'	string	This query parameter specifies the two-letter ISO 3166
     *                       code of country for which you want shipping-rate table information. If you do
     *                       not specify a county code, the request returns all the seller-defined rate
     *                       tables. For implementation help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum
     *
     * @return RateTableResponse
     */
    public function gets(array $queries = []): RateTableResponse
    {
        return $this->client->request('getRateTables', 'GET', 'rate_table',
            [
                'query' => $queries,
            ]
        );
    }
}
