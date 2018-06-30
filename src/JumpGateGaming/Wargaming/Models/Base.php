<?php

namespace JumpGateGaming\Wargaming\Models;

use Jenssegers\Model\Model;

abstract class Base extends Model
{
    /**
     * Convert anything received to usable arrays..
     *
     * @param array $attributes
     */
    public function __construct($attributes = [])
    {
        parent::__construct((array)$attributes);
    }
}
