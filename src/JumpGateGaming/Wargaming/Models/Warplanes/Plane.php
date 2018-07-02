<?php

namespace JumpGateGaming\Wargaming\Models\Warplanes;

use JumpGateGaming\Wargaming\Models\Base;
use JumpGateGaming\Wargaming\Models\General\Images;

/**
 * Class Plane
 *
 * @package JumpGateGaming\Wargaming
 *
 * @property boolean $is_gift
 * @property string  $nation_i18n
 * @property string  $name
 * @property int     $level
 * @property string  $nation
 * @property boolean $is_premium
 * @property int     $plane_id
 * @property string  $name_i18n
 * @property string  $type
 * @property int     $tier
 *
 * @property Images  $images
 */
class Plane extends Base
{
    protected $conversions = [
        'images' => '\JumpGateGaming\Wargaming\Models\General\Images',
    ];

    /**
     * @return int
     */
    public function getTierAttribute()
    {
        return $this->level;
    }
}
