<?php

namespace JumpGateGaming\Wargaming\Models\Tanks\User;

use JumpGateGaming\Wargaming\Models\Base;
use JumpGateGaming\Wargaming\Models\Tanks\Battles\Details;

/**
 * Class Stats
 *
 * @package JumpGateGaming\Wargaming\Models\Tanks
 *
 * @property array   $frags
 * @property array   $trees_cut
 *
 * @property Details $all
 * @property Details $clan
 * @property Details $company
 * @property Details $epic
 * @property Details $fallout
 * @property Details $globalmap_absolute
 * @property Details $globalmap_champion
 * @property Details $globalmap_middle
 * @property Details $historical
 * @property Details $random
 * @property Details $ranked_battles
 * @property Details $ranked_battles_current
 * @property Details $ranked_battles_previous
 * @property Details $regular_team
 * @property Details $stronghold_defense
 * @property Details $stronghold_skirmish
 * @property Details $team
 */
class Stats extends Base
{
    protected $conversions = [
        'all'                     => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'clan'                    => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'company'                 => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'epic'                    => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'fallout'                 => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'globalmap_absolute'      => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'globalmap_champion'      => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'globalmap_middle'        => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'historical'              => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'random'                  => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'ranked_battles'          => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'ranked_battles_current'  => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'ranked_battles_previous' => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'regular_team'            => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'stronghold_defense'      => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'stronghold_skirmish'     => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
        'team'                    => '\JumpGateGaming\Wargaming\Models\Tanks\Battles\Details',
    ];
}
