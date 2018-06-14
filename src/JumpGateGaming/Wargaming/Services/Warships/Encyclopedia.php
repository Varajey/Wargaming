<?php

namespace JumpGateGaming\Wargaming\Services\Warships;

class Encyclopedia
{
    public function __call($name, $arguments)
    {
        $class = '\JumpGateGaming\Wargaming\Services\Warships\Encyclopedia\\' . ucfirst($name);

        return call_user_func_array([new $class, 'handle'], $arguments);
    }
}
