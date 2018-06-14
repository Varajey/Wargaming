<?php

namespace JumpGateGaming\Wargaming\Models;

use Jenssegers\Model\Model;

abstract class Base extends Model
{
    public function __construct($attributes = [])
    {
        parent::__construct((array)$attributes);
    }
}
