<?php

namespace JumpGateGaming\Wargaming\Models\Tanks;

use JumpGateGaming\Wargaming\Models\Base;
use JumpGateGaming\Wargaming\Models\General\Crew;
use JumpGateGaming\Wargaming\Models\General\Engines;
use JumpGateGaming\Wargaming\Models\General\Guns;
use JumpGateGaming\Wargaming\Models\General\Images;
use JumpGateGaming\Wargaming\Models\General\ModuleTree;
use JumpGateGaming\Wargaming\Models\General\NextVehicle;
use JumpGateGaming\Wargaming\Models\General\Profile;
use JumpGateGaming\Wargaming\Models\General\Provisions;
use JumpGateGaming\Wargaming\Models\General\Radios;
use JumpGateGaming\Wargaming\Models\General\Suspensions;
use JumpGateGaming\Wargaming\Models\General\Turrets;

/**
 * Class Tank
 *
 * @package JumpGateGaming\Wargaming
 *
 * @property boolean     $is_premium
 * @property string      $tag
 * @property int         $tank_id
 * @property string      $type
 * @property string      $description
 * @property string      $short_name
 * @property boolean     $is_premium_igr
 * @property string      $nation
 * @property int         $tier
 * @property object      $prices_xp
 * @property boolean     $is_gift
 * @property string      $name
 * @property int         $price_gold
 * @property int         $price_credit
 *
 * @property Radios      $radios
 * @property Images      $images
 * @property Suspensions $suspensions
 * @property Provisions  $provisions
 * @property Engines     $engines
 * @property Crew        $crew
 * @property Guns        $guns
 * @property ModuleTree  $modules_tree
 * @property Profile     $default_profile
 * @property NextVehicle $next_tanks
 * @property Turrets     $turrents
 */
class Tank extends Base
{
    protected $conversions = [
        'radios'          => '\JumpGateGaming\Wargaming\Models\General\Radios',
        'images'          => '\JumpGateGaming\Wargaming\Models\General\Images',
        'suspensions'     => '\JumpGateGaming\Wargaming\Models\General\Suspensions',
        'provisions'      => '\JumpGateGaming\Wargaming\Models\General\Provisions',
        'engines'         => '\JumpGateGaming\Wargaming\Models\General\Engines',
        'crew'            => '\JumpGateGaming\Wargaming\Models\General\Crew',
        'guns'            => '\JumpGateGaming\Wargaming\Models\General\Guns',
        'modules_tree'    => '\JumpGateGaming\Wargaming\Models\General\ModuleTree',
        'default_profile' => '\JumpGateGaming\Wargaming\Models\General\Profile',
        'next_tanks'      => '\JumpGateGaming\Wargaming\Models\General\NextVehicle',
        'turrets'         => '\JumpGateGaming\Wargaming\Models\General\Turrets',
    ];
}
