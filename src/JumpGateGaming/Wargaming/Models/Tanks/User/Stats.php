<?php

namespace JumpGateGaming\Wargaming\Models\Tanks\User;

use JumpGateGaming\Wargaming\Models\Base;
use JumpGateGaming\Wargaming\Models\Warships\Battles\Details;

/**
 * Class Stats
 *
 * @package JumpGateGaming\Wargaming\Models\Warships
 *
 * @property Details $pvp
 * @property Details $pvp_div2
 * @property Details $pvp_div3
 * @property Details $pvp_solo
 * @property Details $pve
 * @property Details $pve_div2
 * @property Details $pve_div3
 * @property Details $pve_solo
 * @property Details $club
 * @property Details $oper_div
 * @property Details $oper_div_hard
 * @property Details $oper_solo
 * @property Details $rank_div2
 * @property Details $rank_div3
 * @property Details $rank_solo
 */
class Stats extends Base
{
    protected $conversions = [
        'pvp'           => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'pvp_div2'      => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'pvp_div3'      => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'pvp_solo'      => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'pve'           => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'pve_div2'      => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'pve_div3'      => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'pve_solo'      => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'club'          => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'oper_div'      => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'oper_div_hard' => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'oper_solo'     => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'rank_div2'     => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'rank_div3'     => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
        'rank_solo'     => '\JumpGateGaming\Wargaming\Models\Warships\Battles\Details',
    ];
}
