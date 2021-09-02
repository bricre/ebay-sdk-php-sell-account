<?php

namespace Ebay\Sell\Account\Api;

use Ebay\Sell\Account\Model\PaymentsProgramOnboardingResponse as PaymentsProgramOnboardingResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Onboarding extends AbstractAPI
{
    /**
     * This method retrieves a seller's onboarding status of eBay managed payments for
     * a specified marketplace. The overall onboarding status of the seller and the
     * status of each onboarding step is returned. Presently, the only supported
     * payments program type is EBAY_PAYMENTS. See Managed Payments on eBay and
     * Payments Terms of Use. Note: Managed payments availability: eBay managed
     * payments is presently available in the US and Germany, and will roll out to
     * Canada, UK, and Australia in July 2020.
     *
     * @param string $marketplace_id        The eBay marketplace ID associated with the
     *                                      onboarding status to retrieve. Only enums for marketplaces that support or will
     *                                      soon support eBay managed payments are allowed. Error 20408 is returned for any
     *                                      other eBay marketplace. No response payload is returned with this error.
     * @param string $payments_program_type The type of payments program whose status
     *                                      is returned by the call. Presently, the only supported payments program is
     *                                      EBAY_PAYMENTS. For details on the program, see Payments Terms of Use.
     *
     * @return PaymentsProgramOnboardingResponse
     */
    public function getPaymentsProgram(string $marketplace_id, string $payments_program_type): PaymentsProgramOnboardingResponse
    {
        return $this->client->request('getPaymentsProgramOnboarding', 'GET', "payments_program/{$marketplace_id}/{$payments_program_type}/onboarding",
            [
            ]
        );
    }
}
