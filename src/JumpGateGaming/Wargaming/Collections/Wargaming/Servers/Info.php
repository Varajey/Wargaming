<?php


namespace JumpGateGaming\Wargaming\Collections\Wargaming\Servers;

use JumpGate\Database\Collections\SupportCollection;
use JumpGateGaming\Wargaming\Models\Wargaming\Server;

class Info extends SupportCollection
{
    /**
     * Gives a collection of server details.
     * Convert these to server models.
     *
     * @param array|mixed $items
     */
    public function __construct($items)
    {
        $items = supportCollector($items)
            ->transform(function ($server) {
                return new Server($server);
            });

        parent::__construct($items);
    }
}
