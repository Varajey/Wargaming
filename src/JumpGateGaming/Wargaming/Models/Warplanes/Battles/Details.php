<?php

namespace JumpGateGaming\Wargaming\Models\Warplanes\Battles;

use JumpGateGaming\Wargaming\Models\Base;

/**
 * Class Pvp
 *
 * @package JumpGateGaming\Wargaming\Models\Warplanes\Pvp
 *
 * @property float  $avg_battle_score
 * @property float  $avg_xp
 * @property int    $battle_Score
 * @property int    $battles
 * @property int    $deaths
 * @property int    $draws
 * @property array  $eff_by_plane_type
 * @property int    $flight_time
 * @property int    $flights
 * @property array  $flights_by_plane_type
 * @property int    $losses
 * @property int    $max_battle_score
 * @property array  $ranks_by_plane_type
 * @property int    $wins
 * @property int    $zone_captures
 * @property object $air_targets
 * @property object $defenders_and_bombers
 *
 * @property Stats  $bombers
 * @property Stats  $defenders
 * @property Stats  $ground_objects
 * @property Stats  $players
 */
class Details extends Base
{
    protected $conversions = [
        'bombers'        => '\JumpGateGaming\Wargaming\Models\Warplanes\Battles\Stats',
        'defenders'      => '\JumpGateGaming\Wargaming\Models\Warplanes\Battles\Stats',
        'ground_objects' => '\JumpGateGaming\Wargaming\Models\Warplanes\Battles\Stats',
        'players'        => '\JumpGateGaming\Wargaming\Models\Warplanes\Battles\Stats',
    ];
}
