<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used to provide details about any KYC check that is applicable to
 * the managed payments seller.
 */
class KycCheck extends AbstractModel
{
    /**
     * The enumeration value returned in this field categorizes the type of details
     * needed for the KYC check. More information about the check is shown in the
     * detailMessage and other applicable, corresponding fields. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/kyc:DetailsType'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $dataRequired = null;

    /**
     * The timestamp in this field indicates the date by which the seller should
     * resolve the KYC requirement. The timestamp in this field uses the UTC date and
     * time format described in the ISO 8601 Standard. See below for this format and an
     * example: MM-DD-YYYY HH:MM:SS 06-05-2020 10:34:18.
     *
     * @var string
     */
    public $dueDate = null;

    /**
     * If applicable and available, a URL will be returned in this field, and the link
     * will take the seller to an eBay page where they can provide the requested
     * information.
     *
     * @var string
     */
    public $remedyUrl = null;

    /**
     * This field gives a short summary of what is required from the seller. An example
     * might be, 'Upload bank document now.'. The detailMessage field will often
     * provide more details on what is required of the seller.
     *
     * @var string
     */
    public $alert = null;

    /**
     * This field gives a detailed message about what is required from the seller. An
     * example might be, 'Please upload a bank document by 2020-08-01 to get your
     * account back in good standing.'.
     *
     * @var string
     */
    public $detailMessage = null;
}
