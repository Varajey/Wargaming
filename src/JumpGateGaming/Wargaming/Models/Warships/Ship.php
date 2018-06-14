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
 * @property Images      $images
 * @property Modules     $modules
 * @property ModuleTree  $modules_tree
 * @property string      $nation
 * @property bool        $is_premium
 * @property int         $ship_id
 * @property int         $price_credit
 * @property Profile     $default_profile
 * @property Upgrades    $upgrades
 * @property int         $tier
 * @property NextVehicle $next_ships
 * @property int         $mod_slots
 * @property string      $type
 * @property bool        $is_special
 * @property string      $name
 */
class Ship extends Base
{
    /**
     * @param $value
     */
    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = new Images($value);
    }

    public function setModulesAttribute($value)
    {
        $this->attributes['modules'] = new Modules($value);
    }

    public function setModulesTreeAttribute($value)
    {
        $this->attributes['modules_tree'] = new ModuleTree($value);
    }

    public function setDefaultProfileAttribute($value)
    {
        $this->attributes['default_profile'] = new Profile($value);
    }

    public function setUpgradesAttribute($value)
    {
        $this->attributes['upgrades'] = new Upgrades($value);
    }

    public function setNextShipsAttribute($value)
    {
        $this->attributes['next_ships'] = new NextVehicle($value);
    }
}
