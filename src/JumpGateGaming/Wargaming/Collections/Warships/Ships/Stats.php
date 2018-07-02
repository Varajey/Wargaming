<?php


namespace JumpGateGaming\Wargaming\Collections\Warships\Ships;

use JumpGate\Database\Collections\SupportCollection;
use JumpGateGaming\Wargaming\Models\Warships\PlayerShip;

class Stats extends SupportCollection
{
    /**
     * Ship stats returns an array of player ship statistics.
     * Convert these to ship models
     *
     * @param array|mixed $items
     */
    public function __construct($items)
    {
        $items = supportCollector($items)
            ->transform(function ($ship) {
                return new PlayerShip($ship);
            });

        parent::__construct($items);
    }
}
