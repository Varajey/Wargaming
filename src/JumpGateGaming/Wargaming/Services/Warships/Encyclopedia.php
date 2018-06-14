<?php

namespace JumpGateGaming\Wargaming\Services\Warships;

class Encyclopedia
{
    public function __call($name, $arguments)
    {
        $class = '\JumpGateGaming\Wargaming\Services\Warships\Encyclopedia\\' . ucfirst($name);
        dd($class);
    }
}
