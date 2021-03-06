<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response object containing the sellers status with regards to the specified
 * payment program.
 */
class PaymentsProgramResponse extends AbstractModel
{
    /**
     * The ID of the eBay marketplace to which the payment policy applies. If this
     * value is not specified in the request, the value defaults to the seller's eBay
     * registration site. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * This path parameter specifies the payment program whose status is returned by
     * the call. Currently the only supported payments program is EBAY_PAYMENTS. For
     * details on the program, see Payments Terms of Use. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:PaymentsProgramType'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $paymentsProgramType = null;

    /**
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:PaymentsProgramStatus'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $status = null;

    /**
     * If set to true, the seller was at one point opted-in to the associated payment
     * program, but they later opted out of the program. A value of false indicates the
     * seller never opted-in to the program or if they did opt-in to the program, they
     * never opted-out of it. It's important to note that the setting of this field
     * does not indicate the seller's current status regarding the payment program. It
     * is possible for this field to return true while the status field returns
     * OPTED_IN.
     *
     * @var bool
     */
    public $wasPreviouslyOptedIn = null;
}
