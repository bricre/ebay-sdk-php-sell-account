<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Contains the payments program onboarding response.
 */
class PaymentsProgramOnboardingResponse extends AbstractModel
{
    /**
     * This enumeration value indicates the eligibility of payment onboarding for the
     * registered site. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:PaymentsProgramOnboardingStatus'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $onboardingStatus = null;

    /**
     * An array of the active process steps for payment onboarding and the status of
     * each step. This array includes the step name, step status, and a webUrl to the
     * IN_PROGRESS step. The step names are returned in sequential order.
     *
     * @var \Ebay\Sell\Account\Model\PaymentsProgramOnboardingSteps[]
     */
    public $steps = null;
}
