<?php

namespace Ebay\Sell\Account\Api;

use Ebay\Sell\Account\Model\PaymentPolicy as PaymentPolicyModel;
use Ebay\Sell\Account\Model\PaymentPolicyRequest as PaymentPolicyRequest;
use Ebay\Sell\Account\Model\PaymentPolicyResponse as PaymentPolicyResponse;
use Ebay\Sell\Account\Model\SetPaymentPolicyResponse as SetPaymentPolicyResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class PaymentPolicy extends AbstractAPI
{
    /**
     * This method retrieves all the payment policies configured for the marketplace
     * you specify using the marketplace_id query parameter. Marketplaces and locales
     * Get the correct policies for a marketplace that supports multiple locales using
     * the Content-Language request header. For example, get the policies for the
     * French locale of the Canadian marketplace by specifying fr-CA for the
     * Content-Language header. Likewise, target the Dutch locale of the Belgium
     * marketplace by setting Content-Language: nl-BE. For details on header values,
     * see HTTP request headers.
     *
     * @param array $queries options:
     *                       'marketplace_id'	string	This query parameter specifies the eBay marketplace of
     *                       the policies you want to retrieve. For implementation help, refer to eBay API
     *                       documentation at
     *                       https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     *
     * @return PaymentPolicyResponse
     */
    public function getPaymentPolicies(array $queries = []): PaymentPolicyResponse
    {
        return $this->client->request('getPaymentPolicies', 'GET', 'payment_policy',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method creates a new payment policy where the policy encapsulates seller's
     * terms for purchase payments. Each policy targets a marketplaceId and
     * categoryTypes.name combination and you can create multiple policies for each
     * combination. Be aware that some marketplaces require a specific payment policy
     * for vehicle listings. A successful request returns the URI to the new policy in
     * the Location response header and the ID for the new policy is returned in the
     * response payload. Tip: For details on creating and using the business policies
     * supported by the Account API, see eBay business policies. Marketplaces and
     * locales Policy instructions can be localized by providing a locale in the
     * Accept-Language HTTP request header. For example, the following setting displays
     * field values from the request body in German: Accept-Language: de-DE. Target the
     * specific locale of a marketplace that supports multiple locales using the
     * Content-Language request header. For example, target the French locale of the
     * Canadian marketplace by specifying the fr-CA locale for Content-Language.
     * Likewise, target the Dutch locale of the Belgium marketplace by setting
     * Content-Language: nl-BE. Tip: For details on headers, see HTTP request headers.
     *
     * @param PaymentPolicyRequest $Model Payment policy request
     *
     * @return SetPaymentPolicyResponse
     */
    public function create(PaymentPolicyRequest $Model): SetPaymentPolicyResponse
    {
        return $this->client->request('createPaymentPolicy', 'POST', 'payment_policy',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method retrieves the complete details of a payment policy. Supply the ID of
     * the policy you want to retrieve using the paymentPolicyId path parameter.
     *
     * @param string $payment_policy_id this path parameter specifies the ID of the
     *                                  payment policy you want to retrieve
     *
     * @return PaymentPolicyModel
     */
    public function get(string $payment_policy_id): PaymentPolicyModel
    {
        return $this->client->request('getPaymentPolicy', 'GET', "payment_policy/{$payment_policy_id}",
            [
            ]
        );
    }

    /**
     * This method updates an existing payment policy. Specify the policy you want to
     * update using the payment_policy_id path parameter. Supply a complete policy
     * payload with the updates you want to make; this call overwrites the existing
     * policy with the new details specified in the payload.
     *
     * @param string               $payment_policy_id this path parameter specifies the ID of the
     *                                                payment policy you want to update
     * @param PaymentPolicyRequest $Model             Payment policy request
     *
     * @return SetPaymentPolicyResponse
     */
    public function update(string $payment_policy_id, PaymentPolicyRequest $Model): SetPaymentPolicyResponse
    {
        return $this->client->request('updatePaymentPolicy', 'PUT', "payment_policy/{$payment_policy_id}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method deletes a payment policy. Supply the ID of the policy you want to
     * delete in the paymentPolicyId path parameter. Note that you cannot delete the
     * default payment policy.
     *
     * @param string $payment_policy_id this path parameter specifies the ID of the
     *                                  payment policy you want to delete
     *
     * @return mixed
     */
    public function delete(string $payment_policy_id)
    {
        return $this->client->request('deletePaymentPolicy', 'DELETE', "payment_policy/{$payment_policy_id}",
            [
            ]
        );
    }

    /**
     * This method retrieves the complete details of a single payment policy. Supply
     * both the policy name and its associated marketplace_id in the request query
     * parameters. Marketplaces and locales Get the correct policy for a marketplace
     * that supports multiple locales using the Content-Language request header. For
     * example, get a policy for the French locale of the Canadian marketplace by
     * specifying fr-CA for the Content-Language header. Likewise, target the Dutch
     * locale of the Belgium marketplace by setting Content-Language: nl-BE. For
     * details on header values, see HTTP request headers.
     *
     * @param array $queries options:
     *                       'marketplace_id'	string	This query parameter specifies the eBay marketplace of
     *                       the policy you want to retrieve. For implementation help, refer to eBay API
     *                       documentation at
     *                       https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     *                       'name'	string	This query parameter specifies the user-defined name of the
     *                       payment policy you want to retrieve.
     *
     * @return PaymentPolicyModel
     */
    public function getByName(array $queries = []): PaymentPolicyModel
    {
        return $this->client->request('getPaymentPolicyByName', 'GET', 'payment_policy/get_by_policy_name',
            [
                'query' => $queries,
            ]
        );
    }
}
