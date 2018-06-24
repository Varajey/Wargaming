<?php

namespace JumpGateGaming\Wargaming\Services\Warplanes;

class Encyclopedia
{
    public function __call($name, $arguments)
    {
        $class = '\JumpGateGaming\Wargaming\Services\Warplanes\Encyclopedia\\' . ucfirst($name);

        return call_user_func_array([new $class, 'handle'], $arguments);
    }
}
