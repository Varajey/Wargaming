<?php

namespace JumpGateGaming\Wargaming\Models\Warplanes\Battles;

use JumpGateGaming\Wargaming\Models\Base;

/**
 * Class Stats
 *
 * @package JumpGateGaming\Wargaming\Models\Warplanes
 *
 * @property int   $assisted
 * @property float $damage_dealt
 * @property int   $killed
 * @property float $max_damage_dealt
 * @property int   $max_killed
 *
 ***************************************************
 * For Ground Objects and Players only
 ***************************************************
 * @property float $avg_killed
 *
 ***************************************************
 * For Ground Objects only
 ***************************************************
 * @property float $avg_killed_per_flight
 *
 ***************************************************
 * For Players only
 ***************************************************
 * @property float $killed_in_defence
 */
class Stats extends Base
{
    //
}
