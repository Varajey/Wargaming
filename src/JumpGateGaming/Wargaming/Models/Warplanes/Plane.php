<?php

namespace JumpGateGaming\Wargaming\Models\Warplanes;

use JumpGateGaming\Wargaming\Models\Base;
use JumpGateGaming\Wargaming\Models\General\Images;

/**
 * Class Plane
 *
 * @package JumpGateGaming\Wargaming
 *
 * @property Images  $images
 * @property string  $nation_il8n
 * @property string  $name
 * @property int     $level
 * @property string  $nation
 * @property boolean $is_premium
 * @property boolean $is_gift
 * @property string  $name_il8n
 * @property string  $type
 * @property int     $plane_id
 * @property int     $tier
 */
class Plane extends Base
{
    public function __construct($attributes = [])
    {
        $attributes         = (array)$attributes;
        $attributes['tier'] = $attributes['level'];

        parent::__construct($attributes);
    }

    /**
     * @param $value
     */
    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = new Images($value);
    }
}
