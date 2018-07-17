<?php

namespace JumpGateGaming\Wargaming\Models\Warplanes;

use JumpGateGaming\Wargaming\Models\Base;
use JumpGateGaming\Wargaming\Models\Warplanes\Battles\Details;
use JumpGateGaming\Wargaming\Models\Warplanes\PlayerPlane\PrivatePlane;

/**
 * Class PlayerPlane
 *
 * @package JumpGateGaming\Wargaming\Models\Warplanes
 *
 * @property int          $account_id
 * @property int          $updated_at
 * @property int          $plane_id
 *
 * @property Details      $all
 * @property PrivatePlane $private
 */
class PlayerPlane extends Base
{
    protected $conversions = [
        'all'     => '\JumpGateGaming\Wargaming\Models\Warplanes\Battles\Details',
        'private' => '\JumpGateGaming\Wargaming\Models\Warplanes\PlayerPlane\PrivatePlane',
    ];
}
