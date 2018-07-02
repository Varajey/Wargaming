<?php

namespace JumpGateGaming\Wargaming\Models\General;

use JumpGate\Database\Collections\SupportCollection;
use JumpGateGaming\Wargaming\Models\Base;

/**
 * Class Config
 *
 * @package JumpGateGaming\Wargaming\Models\General
 *
 * @property string            $route
 * @property string            $verb
 * @property string            $model
 * @property string            $model_type
 *
 * @property SupportCollection $required_arguments
 * @property SupportCollection $optional_arguments
 * @property SupportCollection $extras
 */
class Config extends Base
{
    protected $conversions = [
        'required_arguments' => '\JumpGate\Database\Collections\SupportCollection',
        'optional_arguments' => '\JumpGate\Database\Collections\SupportCollection',
        'extras'             => '\JumpGate\Database\Collections\SupportCollection',
    ];

    public function __get($key)
    {
        if (! isset($this->attributes[$key])) {
            throw new \Exception('You are missing the ' . $key . ' property in your reference file.');
        }

        return parent::__get($key);
    }
}
