<?php

namespace JumpGateGaming\Wargaming\Services\Warships;

/**
 * Class Manager
 *
 * @package JumpGateGaming\Wargaming
 *
 */
class Manager
{
    public function encyclopedia()
    {
        return new Encyclopedia;
    }
}
