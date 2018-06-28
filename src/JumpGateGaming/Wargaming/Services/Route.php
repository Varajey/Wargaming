<?php

namespace JumpGateGaming\Wargaming\Services;

use JumpGateGaming\Wargaming\Models\Response\Error;
use JumpGateGaming\Wargaming\Models\Response\Success;

abstract class Route
{
    /**
     * @param array $arguments
     *
     * @return \JumpGateGaming\Wargaming\Models\Response\Error|\JumpGateGaming\Wargaming\Models\Response\Success
     * @throws \Exception
     */
    public function handle($arguments = [])
    {
        $objects = $this->get($this->getRoute(), $arguments);

        if ($objects->status === 'error') {
            return new Error($objects);
        }

        $objects->data = $this->convertToModels($objects->data);

        return new Success($objects);
    }

    /**
     * Make sure a route is set.
     *
     * @return mixed
     * @throws \Exception
     */
    protected function getRoute()
    {
        if (!isset($this->route)) {
            throw new \Exception('You are missing the route property on your method.');
        }

        return $this->route;
    }

    /**
     * Make sure a model is set.
     *
     * @return mixed
     * @throws \Exception
     */
    protected function getModel()
    {
        if (!isset($this->model)) {
            throw new \Exception('You are missing the model property on your method.');
        }

        return $this->model;
    }
}
