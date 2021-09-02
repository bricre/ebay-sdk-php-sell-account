<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Recipient account information, like PayPal email. If the payment method is
 * PayPal, this structure contains the recipient's PayPal email address.
 */
class RecipientAccountReference extends AbstractModel
{
    /**
     * Contains the PayPal email address of the recipient (buyer) if referenceType is
     * set to PAYPAL_EMAIL.
     *
     * @var string
     */
    public $referenceId = null;

    /**
     * A reference a recipient's account. Currently only PAYPAL_EMAIL is valid. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:RecipientAccountReferenceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $referenceType = null;
}
