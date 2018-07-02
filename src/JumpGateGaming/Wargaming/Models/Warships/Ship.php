<?php

namespace JumpGateGaming\Wargaming\Models\Warships;

use JumpGateGaming\Wargaming\Models\Base;
use JumpGateGaming\Wargaming\Models\General\Images;
use JumpGateGaming\Wargaming\Models\General\Modules;
use JumpGateGaming\Wargaming\Models\General\ModuleTree;
use JumpGateGaming\Wargaming\Models\General\NextVehicle;
use JumpGateGaming\Wargaming\Models\General\Profile;
use JumpGateGaming\Wargaming\Models\General\Upgrades;

/**
 * Class Ship
 *
 * @package JumpGateGaming\Wargaming
 *
 * @property string      $description
 * @property int         $price_gold
 * @property string      $ship_id_str
 * @property bool        $has_demo_profile
 * @property string      $nation
 * @property bool        $is_premium
 * @property int         $ship_id
 * @property int         $price_credit
 * @property int         $tier
 * @property int         $mod_slots
 * @property string      $type
 * @property bool        $is_special
 * @property string      $name
 *
 * @property Images      $images
 * @property Modules     $modules
 * @property ModuleTree  $modules_tree
 * @property Profile     $default_profile
 * @property Upgrades    $upgrades
 * @property NextVehicle $next_ships
 */
class Ship extends Base
{
    protected $conversions = [
        'images'          => '\JumpGateGaming\Wargaming\Models\General\Images',
        'modules'         => '\JumpGateGaming\Wargaming\Models\General\Modules',
        'modules_tree'    => '\JumpGateGaming\Wargaming\Models\General\ModuleTree',
        'default_profile' => '\JumpGateGaming\Wargaming\Models\General\Profile',
        'upgrades'        => '\JumpGateGaming\Wargaming\Models\General\Upgrades',
        'next_ships'      => '\JumpGateGaming\Wargaming\Models\General\NextVehicle',
    ];
}
