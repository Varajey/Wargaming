<?php

namespace JumpGateGaming\Wargaming\Models\Warships\User;

use JumpGateGaming\Wargaming\Models\Base;

/**
 * Class PrivateUser
 *
 * @package JumpGateGaming\Wargaming\Models\Warships\User
 *
 * @property int             $battle_life_time
 * @property int             $credits
 * @property int             $empty_slots
 * @property int             $free_xp
 * @property int             $gold
 * @property int[]           $port
 * @property int             $premium_expires_at
 * @property int             $slots
 *
 * @property GroupedContacts $groups_contacts
 */
class PrivateUser extends Base
{
    protected $conversions = [
        'grouped_contacts' => '\JumpGateGaming\Wargaming\Models\Warships\User\GroupedContacts',
    ];
}
