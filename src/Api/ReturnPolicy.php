<?php

namespace Ebay\Sell\Account\Api;

use Ebay\Sell\Account\Model\ReturnPolicy as ReturnPolicyModel;
use Ebay\Sell\Account\Model\ReturnPolicyRequest as ReturnPolicyRequest;
use Ebay\Sell\Account\Model\ReturnPolicyResponse as ReturnPolicyResponse;
use Ebay\Sell\Account\Model\SetReturnPolicyResponse as SetReturnPolicyResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class ReturnPolicy extends AbstractAPI
{
    /**
     * This method retrieves all the return policies configured for the marketplace you
     * specify using the marketplace_id query parameter. Marketplaces and locales Get
     * the correct policies for a marketplace that supports multiple locales using the
     * Content-Language request header. For example, get the policies for the French
     * locale of the Canadian marketplace by specifying fr-CA for the Content-Language
     * header. Likewise, target the Dutch locale of the Belgium marketplace by setting
     * Content-Language: nl-BE. For details on header values, see HTTP request headers.
     *
     * @param array $queries options:
     *                       'marketplace_id'	string	This query parameter specifies the ID of the eBay
     *                       marketplace of the policy you want to retrieve. For implementation help, refer
     *                       to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     *
     * @return ReturnPolicyResponse
     */
    public function getReturnPolicies(array $queries = []): ReturnPolicyResponse
    {
        return $this->client->request('getReturnPolicies', 'GET', 'return_policy',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method creates a new return policy where the policy encapsulates seller's
     * terms for returning items. Use the Metadata API method getReturnPolicies to
     * determine which categories require you to supply a return policy for the
     * marketplace(s) into which you list. Each policy targets a marketplaceId and
     * categoryTypes.name combination and you can create multiple policies for each
     * combination. A successful request returns the URI to the new policy in the
     * Location response header and the ID for the new policy is returned in the
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
     * @param ReturnPolicyRequest $Model Return policy request
     *
     * @return SetReturnPolicyResponse
     */
    public function create(ReturnPolicyRequest $Model): SetReturnPolicyResponse
    {
        return $this->client->request('createReturnPolicy', 'POST', 'return_policy',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method retrieves the complete details of the return policy specified by the
     * returnPolicyId path parameter.
     *
     * @param string $return_policy_id this path parameter specifies the of the return
     *                                 policy you want to retrieve
     *
     * @return ReturnPolicyModel
     */
    public function get(string $return_policy_id): ReturnPolicyModel
    {
        return $this->client->request('getReturnPolicy', 'GET', "return_policy/{$return_policy_id}",
            [
            ]
        );
    }

    /**
     * This method updates an existing return policy. Specify the policy you want to
     * update using the return_policy_id path parameter. Supply a complete policy
     * payload with the updates you want to make; this call overwrites the existing
     * policy with the new details specified in the payload.
     *
     * @param string              $return_policy_id this path parameter specifies the ID of the
     *                                              return policy you want to update
     * @param ReturnPolicyRequest $Model            container for a return policy request
     *
     * @return SetReturnPolicyResponse
     */
    public function update(string $return_policy_id, ReturnPolicyRequest $Model): SetReturnPolicyResponse
    {
        return $this->client->request('updateReturnPolicy', 'PUT', "return_policy/{$return_policy_id}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method deletes a return policy. Supply the ID of the policy you want to
     * delete in the returnPolicyId path parameter. Note that you cannot delete the
     * default return policy.
     *
     * @param string $return_policy_id this path parameter specifies the ID of the
     *                                 return policy you want to delete
     *
     * @return mixed
     */
    public function delete(string $return_policy_id)
    {
        return $this->client->request('deleteReturnPolicy', 'DELETE', "return_policy/{$return_policy_id}",
            [
            ]
        );
    }

    /**
     * This method retrieves the complete details of a single return policy. Supply
     * both the policy name and its associated marketplace_id in the request query
     * parameters. Marketplaces and locales Get the correct policy for a marketplace
     * that supports multiple locales using the Content-Language request header. For
     * example, get a policy for the French locale of the Canadian marketplace by
     * specifying fr-CA for the Content-Language header. Likewise, target the Dutch
     * locale of the Belgium marketplace by setting Content-Language: nl-BE. For
     * details on header values, see HTTP request headers.
     *
     * @param array $queries options:
     *                       'marketplace_id'	string	This query parameter specifies the ID of the eBay
     *                       marketplace of the policy you want to retrieve. For implementation help, refer
     *                       to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
     *                       'name'	string	This query parameter specifies the user-defined name of the return
     *                       policy you want to retrieve.
     *
     * @return ReturnPolicyModel
     */
    public function getByName(array $queries = []): ReturnPolicyModel
    {
        return $this->client->request('getReturnPolicyByName', 'GET', 'return_policy/get_by_policy_name',
            [
                'query' => $queries,
            ]
        );
    }
}
