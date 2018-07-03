<?php

namespace JumpGateGaming\Wargaming\Models\Warplanes;

use JumpGateGaming\Wargaming\Models\Base;
use JumpGateGaming\Wargaming\Models\Warplanes\User\PrivateUser;

/**
 * Class User
 *
 * @package JumpGateGaming\Wargaming\Models\Warplanes
 *
 * @property int         $account_id
 * @property int         $cbt_games_played
 * @property string      $client_language
 * @property timestamp   $created_at
 * @property int         $global_Rating
 * @property timestamp   $last_battle_time
 * @property string      $nickname
 * @property int         $obt_games_played
 * @property timestamp   $updated_at
 *
 * @property PrivateUser $private
 * @property Stats       $statistics
 */
class User extends Base
{
    protected $conversions = [
        'private'    => '\JumpGateGaming\Wargaming\Models\Warplanes\User\PrivateUser',
        'statistics' => '\JumpGateGaming\Wargaming\Models\Warplanes\User\Stats',
    ];
}
