<?php

namespace Ebay\Sell\Account\Api;

use Ebay\Sell\Account\Model\SellingPrivileges as SellingPrivileges;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Privilege extends AbstractAPI
{
    /**
     * This method retrieves the seller's current set of privileges. The call returns
     * whether or not the seller's eBay registration has been completed, as well as the
     * details of their site-wide sellingLimt (the amount and quantity they can sell on
     * a given day).
     *
     * @return SellingPrivileges
     */
    public function gets(): SellingPrivileges
    {
        return $this->client->request('getPrivileges', 'GET', 'privilege',
            [
            ]
        );
    }
}
