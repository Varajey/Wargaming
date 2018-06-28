<?php

namespace JumpGateGaming\Wargaming\Services\Tanks\Encyclopedia;

use JumpGateGaming\Wargaming\Models\Response\Error;
use JumpGateGaming\Wargaming\Models\Response\Success;
use JumpGateGaming\Wargaming\Services\Route;
use JumpGateGaming\Wargaming\Traits\CallsApi;
use JumpGateGaming\Wargaming\Traits\ConvertsToModels;

class Tanks extends Route
{
    /**
     * This class makes API calls to wargaming.
     */
    use CallsApi;

    use ConvertsToModels;

    protected $route = 'encyclopedia/vehicles/';

    protected $model = '\JumpGateGaming\Wargaming\Models\Tanks\Tank';
}
