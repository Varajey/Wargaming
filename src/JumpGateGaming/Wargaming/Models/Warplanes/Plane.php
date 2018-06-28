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
    /**
     * @param $value
     */
    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = new Images($value);
    }

    /**
     * @return int
     */
    public function getTierAttribute()
    {
        return $this->level;
    }
}
