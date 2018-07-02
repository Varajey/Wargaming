<?php

namespace JumpGateGaming\Wargaming\Models\Warships;

use JumpGateGaming\Wargaming\Models\Base;
use JumpGateGaming\Wargaming\Models\Warships\User\PrivateUser;

/**
 * Class User
 *
 * @package JumpGateGaming\Wargaming\Models\Warships
 *
 * @property int         $account_id
 * @property int         $created_at
 * @property int         $hidden_profile
 * @property int         $karma
 * @property int         $last_battle_time
 * @property int         $leveling_points
 * @property int         $leveling_tier
 * @property int         $logout_at
 * @property int         $nickname
 * @property int         $stats_updated_at
 * @property int         $updated_at
 *
 * @property PrivateUser $private
 * @property Stats       $statistics
 */
class User extends Base
{
    protected $conversions = [
        'private'    => '\JumpGateGaming\Wargaming\Models\Warships\User\PrivateUser',
        'statistics' => '\JumpGateGaming\Wargaming\Models\Warships\User\Stats',
    ];
}
