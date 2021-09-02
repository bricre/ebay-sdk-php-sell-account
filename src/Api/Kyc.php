<?php

namespace Ebay\Sell\Account\Api;

use Ebay\Sell\Account\Model\KycResponse as KycResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Kyc extends AbstractAPI
{
    /**
     * This method is used by sellers onboarded for eBay managed payments, or sellers
     * who are currently going through, or who are eligible for onboarding for eBay
     * managed payments. With this method, a seller can discover if there are any
     * action items in regards to providing more documentation and/or information about
     * themselves, their company, or the bank account they are or will be using for
     * seller payouts. These 'action items' are also know as 'Know Your Customer' (or
     * KYC) checks. This method does not require any parameters other than the OAuth
     * user token associated with the seller's account. If the managed payments seller
     * does not currently have any pending 'KYC' action items, only a 204 No Content
     * HTTP status code is returned, and no response payload. Note: This method is not
     * applicable for sellers who are not eligible for eBay managed payments. For
     * sellers who sell on one or more eBay marketplaces that currently support managed
     * payments, they can check on their managed payments onboarding status by using
     * the getPaymentsProgramOnboarding method.
     *
     * @return KycResponse
     */
    public function getKYC(): KycResponse
    {
        return $this->client->request('getKYC', 'GET', 'kyc',
            [
            ]
        );
    }
}
