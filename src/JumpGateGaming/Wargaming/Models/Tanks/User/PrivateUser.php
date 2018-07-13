<?php

namespace JumpGateGaming\Wargaming\Models\Tanks\User;

use JumpGateGaming\Wargaming\Models\Base;

/**
 * Class PrivateUser
 *
 * @package JumpGateGaming\Wargaming\Models\Tanks\User
 *
 * @property string          $ban_info
 * @property int             $ban_time
 * @property int             $battle_life_time
 * @property int             $bonds
 * @property int             $credits
 * @property int             $free_xp
 * @property int             $garage
 * @property int             $gold
 * @property bool            $is_bound_to_phone
 * @property bool            $is_premium
 * @property int             $premium_expires_at
 *
 * @property GroupedContacts $groups_contacts
 * @property Missions        $personal_missions
 * @property Booster         $boosters
 * @property Rentals         $rented
 */
class PrivateUser extends Base
{
    protected $conversions = [
        'grouped_contacts'  => '\JumpGateGaming\Wargaming\Models\Tanks\User\GroupedContacts',
        'personal_missions' => '\JumpGateGaming\Wargaming\Models\Tanks\User\Missions',
        'boosters'          => '\JumpGateGaming\Wargaming\Models\Tanks\User\Booster',
    ];
}
