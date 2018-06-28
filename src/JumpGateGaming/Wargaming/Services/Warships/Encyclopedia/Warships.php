<?php

namespace JumpGateGaming\Wargaming\Services\Warships\Encyclopedia;

use JumpGateGaming\Wargaming\Models\Response\Error;
use JumpGateGaming\Wargaming\Models\Response\Success;
use JumpGateGaming\Wargaming\Services\Route;
use JumpGateGaming\Wargaming\Traits\CallsApi;
use JumpGateGaming\Wargaming\Traits\ConvertsToModels;

class Warships extends Route
{
    /**
     * This class makes API calls to wargaming.
     */
    use CallsApi;

    use ConvertsToModels;

    protected $route = 'encyclopedia/ships/';

    protected $model = '\JumpGateGaming\Wargaming\Models\Warships\Ship';
}
