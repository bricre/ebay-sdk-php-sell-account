<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The category type discerns whether the policy covers the sale of motor vehicles
 * (via eBay Motors), or the sale of everything except motor vehicles. Each
 * business policy can be associated with either or both categories
 * ('MOTORS_VEHICLES' and 'ALL_EXCLUDING_MOTORS_VEHICLES'); however,the
 * 'MOTORS_VEHICLES' category type is not valid for return policies&ndash;return
 * policies cannot be used with motor vehicle listings.
 */
class CategoryType extends AbstractModel
{
    /**
     * The category type to which the policy applies (motor vehicles or non-motor
     * vehicles). Restrictions: The MOTORS_VEHICLES category type is not valid for
     * return policies. eBay flows do not support the return of motor vehicles. Only
     * the ALL_EXCLUDING_MOTORS_VEHICLES category type is supported for sellers who
     * opt-in to the managed payments program. Managed payments does not currently
     * support the sale of motor vehicles. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/account/types/api:CategoryTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $name = null;
}
