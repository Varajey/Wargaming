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
    /**
     * @param $value
     */
    public function setRadiosAttribute($value)
    {
        $this->attributes['radios'] = new Radios($value);
    }

    /**
     * @param $value
     */
    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = new Images($value);
    }

    /**
     * @param $value
     */
    public function setSuspensionsAttribute($value)
    {
        $this->attributes['suspensions'] = new Suspensions($value);
    }

    /**
     * @param $value
     */
    public function setProvisionsAttribute($value)
    {
        $this->attributes['provisions'] = new Provisions($value);
    }

    /**
     * @param $value
     */
    public function setEnginesAttribute($value)
    {
        $this->attributes['engines'] = new Engines($value);
    }

    /**
     * @param $value
     */
    public function setCrewAttribute($value)
    {
        $this->attributes['crew'] = new Crew($value);
    }

    /**
     * @param $value
     */
    public function setGunsAttribute($value)
    {
        $this->attributes['guns'] = new Guns($value);
    }

    /**
     * @param $value
     */
    public function setModulesTreeAttribute($value)
    {
        $this->attributes['modules_tree'] = new ModuleTree($value);
    }

    /**
     * @param $value
     */
    public function setDefaultProfileAttribute($value)
    {
        $this->attributes['default_profile'] = new Profile($value);
    }

    /**
     * @param $value
     */
    public function setNextTanksAttribute($value)
    {
        $this->attributes['next_tanks'] = new NextVehicle($value);
    }

    /**
     * @param $value
     */
    public function setTurretsAttribute($value)
    {
        $this->attributes['turrets'] = new Turrets($value);
    }
}
