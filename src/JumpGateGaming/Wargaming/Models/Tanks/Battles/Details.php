<?php

namespace JumpGateGaming\Wargaming\Models\Tanks\Battles;

use JumpGateGaming\Wargaming\Models\Base;

/**
 * Class Details
 *
 * @package JumpGateGaming\Wargaming\Models\Tanks\Pvp
 *
 * @property int   $battle_avg_xp
 * @property int   $battles
 * @property int   $battles_on_stunning_vehicles
 * @property int   $capture_points
 * @property int   $damage_dealt
 * @property int   $damage_received
 * @property int   $direct_hits_received
 * @property int   $draws
 * @property int   $dropped_capture_points
 * @property int   $explosion_hits
 * @property int   $explosion_hits_received
 * @property int   $frags
 * @property int   $hits
 * @property int   $hits_percents
 * @property int   $losses
 * @property int   $no_damage_direct_hits_received
 * @property int   $piercings
 * @property int   $piercings_received
 * @property int   $shots
 * @property int   $spotted
 * @property int   $stun_assisted_damage
 * @property int   $stun_number
 * @property int   $survived_battles
 * @property float $tanking_factor
 * @property int   $wins
 * @property int   $xp
 *
 ***************************************************
 * For everything except Stronghold
 ***************************************************
 * @property float $avg_damage_assisted
 * @property float $avg_damage_assisted_radio
 * @property float $avg_damage_assisted_track
 * @property float $avg_damage_blocked
 *
 ***************************************************
 * For All, Epic, Fallout, Historical, Ranked Battles,
 * Team and Stronghold statistics only
 ***************************************************
 * @property int   $max_damage
 * @property int   $max_damage_tank_id
 * @property int   $max_frags
 * @property int   $max_frags_tank_id
 * @property int   $max_xp
 * @property int   $max_xp_tank_id
 *
 ***************************************************
 * For Fallout statistics only
 ***************************************************
 * @property int   $avatar_damage_dealt
 * @property int   $avatar_frags
 * @property int   $death_count
 * @property int   $flag_capture
 * @property int   $flag_capture_solo
 * @property int   $max_frags_with_avatar
 * @property int   $max_win_points
 * @property int   $resource_absorbed
 * @property int   $win_points
 */
class Details extends Base
{
    //
}
