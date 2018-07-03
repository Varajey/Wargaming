<?php

namespace JumpGateGaming\Wargaming\Models\Warplanes\User;

use JumpGateGaming\Wargaming\Models\Base;
use JumpGateGaming\Wargaming\Models\Warplanes\Battles\Details;

/**
 * Class Stats
 *
 * @package JumpGateGaming\Wargaming\Models\Warplanes
 *
 * @property Details $all
 */
class Stats extends Base
{
    protected $conversions = [
        'all' => '\JumpGateGaming\Wargaming\Models\Warplanes\Battles\Details',
    ];
}
