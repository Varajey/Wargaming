<?php

namespace JumpGateGaming\Wargaming\Services\Client\Regions;

abstract class Base
{
    public function getUrl($type)
    {
        switch ($type) {
            case 'tank':
            case 'tanks':
                $constant = 'TANK_URL';
                break;
            case 'ship':
            case 'ships':
            case 'warship':
            case 'warships':
                $constant = 'WARSHIPS_URL';
                break;
            case 'plane':
            case 'planes':
            case 'warplane':
            case 'warplanes':
                $constant = 'WARPLANES_URL';
                break;
        }

        try {
            return constant("static::{$constant}");
        } catch (\Exception $exception) {
            throw new \Exception('You need to set the URL constant on your region.');
        }
    }
}
