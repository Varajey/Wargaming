<?php

namespace JumpGateGaming\Wargaming\Services\Warplanes\Encyclopedia;

use JumpGateGaming\Wargaming\Models\Response\Error;
use JumpGateGaming\Wargaming\Models\Response\Success;
use JumpGateGaming\Wargaming\Services\Route;
use JumpGateGaming\Wargaming\Traits\CallsApi;
use JumpGateGaming\Wargaming\Traits\ConvertsToModels;

class Warplanes extends Route
{
    /**
     * This class makes API calls to wargaming.
     */
    use CallsApi;

    use ConvertsToModels;

    protected $route = 'encyclopedia/planes/';

    protected $model = '\JumpGateGaming\Wargaming\Models\Warplanes\Plane';

    /**
     * @param array $arguments
     *
     * @return \JumpGateGaming\Wargaming\Models\Response\Error|\JumpGateGaming\Wargaming\Models\Response\Success
     * @throws \Exception
     */
    public function handle($arguments = [])
    {
        $planes = $this->get($this->getRoute(), $arguments);

        if ($planes->status === 'error') {
            return new Error($planes);
        }

        $planes->data = $this->convertToModels($planes->data);

        return new Success($planes);
    }
}
