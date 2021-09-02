<?php

namespace Ebay\Sell\Account\Api;

use Ebay\Sell\Account\Model\FulfillmentPolicy as FulfillmentPolicyModel;
use Ebay\Sell\Account\Model\FulfillmentPolicyRequest as FulfillmentPolicyRequest;
use Ebay\Sell\Account\Model\FulfillmentPolicyResponse as FulfillmentPolicyResponse;
use Ebay\Sell\Account\Model\SetFulfillmentPolicyResponse as SetFulfillmentPolicyResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class FulfillmentPolicy extends AbstractAPI
{
    /**
     * This method retrieves all the fulfillment policies configured for the
     * marketplace you specify using the marketplace_id query parameter. Marketplaces
     * and locales Get the correct policies for a marketplace that supports multiple
     * locales using the Content-Language request header. For example, get the policies
     * for the French locale of the Canadian marketplace by specifying fr-CA for the
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
     * @return FulfillmentPolicyResponse
     */
    public function getFulfillmentPolicies(array $queries = []): FulfillmentPolicyResponse
    {
        return $this->client->request('getFulfillmentPolicies', 'GET', 'fulfillment_policy',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method creates a new fulfillment policy where the policy encapsulates
     * seller's terms for fulfilling item purchases. Fulfillment policies include the
     * shipment options that the seller offers to buyers. Each policy targets a
     * marketplaceId and categoryTypes.name combination and you can create multiple
     * policies for each combination. Be aware that some marketplaces require a
     * specific fulfillment policy for vehicle listings. A successful request returns
     * the URI to the new policy in the Location response header and the ID for the new
     * policy is returned in the response payload. Tip: For details on creating and
     * using the business policies supported by the Account API, see eBay business
     * policies. Marketplaces and locales Policy instructions can be localized by
     * providing a locale in the Accept-Language HTTP request header. For example, the
     * following setting displays field values from the request body in German:
     * Accept-Language: de-DE. Target the specific locale of a marketplace that
     * supports multiple locales using the Content-Language request header. For
     * example, target the French locale of the Canadian marketplace by specifying the
     * fr-CA locale for Content-Language. Likewise, target the Dutch locale of the
     * Belgium marketplace by setting Content-Language: nl-BE. Tip: For details on
     * headers, see HTTP request headers.
     *
     * @param FulfillmentPolicyRequest $Model request to create a seller account
     *                                        fulfillment policy
     *
     * @return SetFulfillmentPolicyResponse
     */
    public function create(FulfillmentPolicyRequest $Model): SetFulfillmentPolicyResponse
    {
        return $this->client->request('createFulfillmentPolicy', 'POST', 'fulfillment_policy',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method retrieves the complete details of a fulfillment policy. Supply the
     * ID of the policy you want to retrieve using the fulfillmentPolicyId path
     * parameter.
     *
     * @param string $fulfillmentPolicyId this path parameter specifies the ID of the
     *                                    fulfillment policy you want to retrieve
     *
     * @return FulfillmentPolicyModel
     */
    public function get(string $fulfillmentPolicyId): FulfillmentPolicyModel
    {
        return $this->client->request('getFulfillmentPolicy', 'GET', "fulfillment_policy/{$fulfillmentPolicyId}",
            [
            ]
        );
    }

    /**
     * This method updates an existing fulfillment policy. Specify the policy you want
     * to update using the fulfillment_policy_id path parameter. Supply a complete
     * policy payload with the updates you want to make; this call overwrites the
     * existing policy with the new details specified in the payload.
     *
     * @param string                   $fulfillmentPolicyId this path parameter specifies the ID of the
     *                                                      fulfillment policy you want to update
     * @param FulfillmentPolicyRequest $Model               Fulfillment policy request
     *
     * @return SetFulfillmentPolicyResponse
     */
    public function update(string $fulfillmentPolicyId, FulfillmentPolicyRequest $Model): SetFulfillmentPolicyResponse
    {
        return $this->client->request('updateFulfillmentPolicy', 'PUT', "fulfillment_policy/{$fulfillmentPolicyId}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method deletes a fulfillment policy. Supply the ID of the policy you want
     * to delete in the fulfillmentPolicyId path parameter. Note that you cannot delete
     * the default fulfillment policy.
     *
     * @param string $fulfillmentPolicyId this path parameter specifies the ID of the
     *                                    fulfillment policy to delete
     *
     * @return mixed
     */
    public function delete(string $fulfillmentPolicyId)
    {
        return $this->client->request('deleteFulfillmentPolicy', 'DELETE', "fulfillment_policy/{$fulfillmentPolicyId}",
            [
            ]
        );
    }

    /**
     * This method retrieves the complete details for a single fulfillment policy. In
     * the request, supply both the policy name and its associated marketplace_id as
     * query parameters. Marketplaces and locales Get the correct policy for a
     * marketplace that supports multiple locales using the Content-Language request
     * header. For example, get a policy for the French locale of the Canadian
     * marketplace by specifying fr-CA for the Content-Language header. Likewise,
     * target the Dutch locale of the Belgium marketplace by setting Content-Language:
     * nl-BE. For details on header values, see HTTP request headers.
     *
     * @param array $queries options:
     *                       'marketplace_id'	string	This query parameter specifies the eBay marketplace of
     *                       the policy you want to retrieve. For implementation help, refer to eBay API
     *                       documentation at
     *                       https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     *                       'name'	string	This query parameter specifies the user-defined name of the
     *                       fulfillment policy you want to retrieve.
     *
     * @return FulfillmentPolicyModel
     */
    public function getByName(array $queries = []): FulfillmentPolicyModel
    {
        return $this->client->request('getFulfillmentPolicyByName', 'GET', 'fulfillment_policy/get_by_policy_name',
            [
                'query' => $queries,
            ]
        );
    }
}
