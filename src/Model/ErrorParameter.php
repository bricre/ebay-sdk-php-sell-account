<?php

namespace Ebay\Sell\Account\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A complex type that indicates a parameter that caused an error and the value of
 * the parameter which caused the error.
 */
class ErrorParameter extends AbstractModel
{
    /**
     * Name of the parameter that caused the error.
     *
     * @var string
     */
    public $name = null;

    /**
     * The value of the parameter that caused the error.
     *
     * @var string
     */
    public $value = null;
}
