<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A list of the supported seller programs.
 */
class Programs extends AbstractModel
{
    /**
     * A list of seller programs.
     *
     * @var \Ebay\Sell\Account\Model\Program[]
     */
    public $programs = null;
}
