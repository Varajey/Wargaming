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

    protected $route = 'encyclopedia/tanks/';

    protected $model = '\JumpGateGaming\Wargaming\Models\Tanks\Tank';

    /**
     * @param array $arguments
     *
     * @return \JumpGateGaming\Wargaming\Models\Response\Error|\JumpGateGaming\Wargaming\Models\Response\Success
     * @throws \Exception
     */
    public function handle($arguments = [])
    {
        $tanks = $this->get($this->getRoute(), $arguments);

        if ($tanks->status === 'error') {
            return new Error($tanks);
        }

        $tanks->data = $this->convertToModels($tanks->data);

        return new Success($tanks);
    }
}
