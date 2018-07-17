<?php


namespace JumpGateGaming\Wargaming\Collections\Warplanes\Planes;

use JumpGate\Database\Collections\SupportCollection;
use JumpGateGaming\Wargaming\Models\Warplanes\PlayerPlane;

class Stats extends SupportCollection
{
    /**
     * Ship stats returns an array of player plane statistics.
     * Convert these to plane models.
     *
     * @param array|mixed $items
     */
    public function __construct($items)
    {
        $items = supportCollector($items)
            ->transform(function ($ship) {
                return new PlayerPlane($ship);
            });

        parent::__construct($items);
    }
}
