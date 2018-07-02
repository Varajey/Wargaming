<?php

namespace JumpGateGaming\Wargaming\Models\Tanks;

use JumpGateGaming\Wargaming\Models\Base;
use JumpGateGaming\Wargaming\Models\Tanks\User\PrivateUser;
use JumpGateGaming\Wargaming\Models\Tanks\User\Stats;

/**
 * Class User
 *
 * @package JumpGateGaming\Wargaming\Models\Tanks
 *
 * @property int         $account_id
 * @property int         $clan_id
 * @property string      $client_language
 * @property timestamp   $created_at
 * @property int         $global_rating
 * @property timestamp   $last_battle_time
 * @property timestamp   $logout_at
 * @property string      $nickname
 * @property timestamp   $updated_at
 *
 * @property PrivateUser $private
 * @property Stats       $statistics
 */
class User extends Base
{
    protected $conversions = [
        'private'    => '\JumpGateGaming\Wargaming\Models\Tanks\User\PrivateUser',
        'statistics' => '\JumpGateGaming\Wargaming\Models\Tanks\User\Stats',
    ];
}
