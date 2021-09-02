<?php

namespace Ebay\Sell\Account;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getFulfillmentPolicies' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\FulfillmentPolicyResponse',
        ],
        'createFulfillmentPolicy' => [
            '201.' => 'Ebay\\Sell\\Account\\Model\\SetFulfillmentPolicyResponse',
        ],
        'getFulfillmentPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\FulfillmentPolicy',
        ],
        'updateFulfillmentPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\SetFulfillmentPolicyResponse',
        ],
        'getFulfillmentPolicyByName' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\FulfillmentPolicy',
        ],
        'getPaymentPolicies' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\PaymentPolicyResponse',
        ],
        'createPaymentPolicy' => [
            '201.' => 'Ebay\\Sell\\Account\\Model\\SetPaymentPolicyResponse',
        ],
        'getPaymentPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\PaymentPolicy',
        ],
        'updatePaymentPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\SetPaymentPolicyResponse',
        ],
        'getPaymentPolicyByName' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\PaymentPolicy',
        ],
        'getPaymentsProgram' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\PaymentsProgramResponse',
        ],
        'getPaymentsProgramOnboarding' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\PaymentsProgramOnboardingResponse',
        ],
        'getPrivileges' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\SellingPrivileges',
        ],
        'getOptedInPrograms' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\Programs',
        ],
        'optInToProgram' => [
            '200.' => null,
        ],
        'optOutOfProgram' => [
            '200.' => null,
        ],
        'getRateTables' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\RateTableResponse',
        ],
        'getReturnPolicies' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\ReturnPolicyResponse',
        ],
        'createReturnPolicy' => [
            '201.' => 'Ebay\\Sell\\Account\\Model\\SetReturnPolicyResponse',
        ],
        'getReturnPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\ReturnPolicy',
        ],
        'updateReturnPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\SetReturnPolicyResponse',
        ],
        'getReturnPolicyByName' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\ReturnPolicy',
        ],
        'getSalesTax' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\SalesTax',
        ],
        'getSalesTaxes' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\SalesTaxes',
        ],
        'getKYC' => [
            '200.' => 'Ebay\\Sell\\Account\\Model\\KycResponse',
        ],
    ];
}
