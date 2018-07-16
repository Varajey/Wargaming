<?php


namespace JumpGateGaming\Wargaming\Collections\Tanks\Tanks;

use JumpGate\Database\Collections\SupportCollection;
use JumpGateGaming\Wargaming\Models\Tanks\PlayerTank;

class Stats extends SupportCollection
{
    /**
     * Ship stats returns an array of player tank statistics.
     * Convert these to tank models.
     *
     * @param array|mixed $items
     */
    public function __construct($items)
    {
        $items = supportCollector($items)
            ->transform(function ($ship) {
                return new PlayerTank($ship);
            });

        parent::__construct($items);
    }
}
