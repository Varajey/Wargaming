<?php

namespace JumpGateGaming\Wargaming\Services\Client\Regions;

abstract class Base
{
    /**
     * Get the URL from a region class based on game.
     *
     * @param string $type
     *
     * @return mixed
     * @throws \Exception
     */
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
            $url = constant("static::{$constant}");
        } catch (\Exception $exception) {
            throw new \Exception('You need to set the URL constant on your region.');
        }

        if ($url === false) {
            throw new \Exception('This game is not offered in this region.');
        }

        return $url;
    }
}
