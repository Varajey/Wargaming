<?php

namespace JumpGateGaming\Wargaming\Services\Tanks\Encyclopedia;

use JumpGateGaming\Wargaming\Services\Route;
use JumpGateGaming\Wargaming\Traits\CallsApi;
use JumpGateGaming\Wargaming\Traits\ConvertsToModels;

class Modules extends Route
{
    /**
     * This class makes API calls to wargaming.
     */
    use CallsApi;

    use ConvertsToModels;

    protected $route = 'encyclopedia/modules/';

    protected $model = '\JumpGateGaming\Wargaming\Models\General\Engines';
}
