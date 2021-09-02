<?php

namespace Ebay\Sell\Account\Api;

use Ebay\Sell\Account\Model\PaymentsProgramResponse as PaymentsProgramResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class PaymentsProgram extends AbstractAPI
{
    /**
     * This method returns whether or not the user is opted-in to the specified
     * payments program. Sellers opt-in to payments programs by marketplace and you use
     * the marketplace_id path parameter to specify the marketplace of the status flag
     * you want returned. Note: Currently, the only supported payments program is eBay
     * Payments. For details, see: Managed Payments on eBay Payments Terms of Use.
     *
     * @param string $marketplace_id        this path parameter specifies the eBay marketplace
     *                                      of the payments program for which you want to retrieve the seller's status
     * @param string $payments_program_type This path parameter specifies the payments
     *                                      program whose status is returned by the call. Currently the only supported
     *                                      payments program is EBAY_PAYMENTS. For details on the program, see Payments
     *                                      Terms of Use.
     *
     * @return PaymentsProgramResponse
     */
    public function get(string $marketplace_id, string $payments_program_type): PaymentsProgramResponse
    {
        return $this->client->request('getPaymentsProgram', 'GET', "payments_program/{$marketplace_id}/{$payments_program_type}",
            [
            ]
        );
    }
}
