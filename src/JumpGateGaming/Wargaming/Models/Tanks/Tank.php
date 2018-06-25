<?php

namespace JumpGateGaming\Wargaming\Models\Tanks;

use JumpGateGaming\Wargaming\Models\Base;
use JumpGateGaming\Wargaming\Models\General\Images;

/**
 * Class Tank
 *
 * @package JumpGateGaming\Wargaming
 *
 * @property Images  $images
 * @property string  $nation_il8n
 * @property string  $name
 * @property int     $level
 * @property string  $nation
 * @property boolean $is_premium
 * @property string  $type_il8n
 * @property string  $short_name_il8n
 * @property string  $name_il8n
 * @property string  $type
 * @property int     $tank_id
 * @property int     $tier
 */
class Tank extends Base
{
    /**
     * @param $value
     */
    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = new Images($value);
    }
}
