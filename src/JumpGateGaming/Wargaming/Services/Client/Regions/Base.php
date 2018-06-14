<?php

namespace JumpGateGaming\Wargaming\Services\Client\Regions;

abstract class Base
{
    public function getUrl()
    {
        try {
            return static::URL;
        } catch (\Exception $exception) {
            throw new \Exception('You need to set the URL constant on your region.');
        }
    }
}
