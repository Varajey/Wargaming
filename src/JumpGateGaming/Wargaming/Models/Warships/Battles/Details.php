<?php

namespace JumpGateGaming\Wargaming\Models\Warships\Battles;

use JumpGateGaming\Wargaming\Models\Base;

/**
 * Class Pvp
 *
 * @package JumpGateGaming\Wargaming\Models\Warships\Pvp
 *
 * @property int   $art_agro
 * @property int   $battles
 * @property int   $capture_points
 * @property int   $damage_dealt
 * @property int   $damage_scouting
 * @property int   $draws
 * @property int   $dropped_capture_points
 * @property int   $frags
 * @property int   $losses
 * @property int   $max_damage_dealt
 * @property int   $max_damage_scouting
 * @property int   $max_frags_battle
 * @property int   $max_planes_killed
 * @property int   $max_ships_spotted
 * @property int   $max_total_agro
 * @property int   $max_xp
 * @property int   $planes_killed
 * @property int   $ships_spotted
 * @property int   $survived_battles
 * @property int   $survived_wins
 * @property int   $team_capture_points
 * @property int   $team_dropped_capture_points
 * @property int   $torpedo_agro
 * @property int   $wins
 * @property int   $xp
 *
 * @property Stats $main_battery
 * @property Stats $second_battery
 * @property Stats $ramming
 * @property Stats $torpedoes
 * @property Stats $aircraft
 *
 ***************************************************
 * For Operation Mode (normal, hard and solo) only
 ***************************************************
 * @property array $wins_by_tasks
 *
 ***************************************************
 * For PvP only
 ***************************************************
 * @property int   $battles_since_510
 * @property int   $battles_since_512
 * @property int   $damage_to_buildings
 * @property int   $max_damage_dealt_to_buildings
 * @property int   $max_suppressions_count
 * @property int   $suppressions_count
 */
class Details extends Base
{
    protected $conversions = [
        'main_battery'   => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Stats',
        'second_battery' => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Stats',
        'ramming'        => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Stats',
        'torpedoes'      => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Stats',
        'aircraft'       => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Stats',
    ];
}
