<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This is the base response type of the getKYC method.
 */
class KycResponse extends AbstractModel
{
    /**
     * This array contains one or more KYC checks required from a managed payments
     * seller. The seller may need to provide more documentation and/or information
     * about themselves, their company, or the bank account they are using for seller
     * payouts. If no KYC checks are currently required from the seller, this array is
     * not returned, and the seller only receives a 204 No Content HTTP status code.
     *
     * @var \Ebay\Sell\Account\Model\KycCheck[]
     */
    public $kycChecks = null;
}
