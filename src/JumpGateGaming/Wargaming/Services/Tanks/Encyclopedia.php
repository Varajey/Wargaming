<?php

namespace JumpGateGaming\Wargaming\Services\Tanks;

class Encyclopedia
{
    public function __call($name, $arguments)
    {
        $class = '\JumpGateGaming\Wargaming\Services\Tanks\Encyclopedia\\' . ucfirst($name);

        return call_user_func_array([new $class, 'handle'], $arguments);
    }
}
