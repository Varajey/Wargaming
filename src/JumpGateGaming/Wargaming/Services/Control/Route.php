<?php

namespace JumpGateGaming\Wargaming\Services\Control;

use JumpGateGaming\Wargaming\Models\Response\Error;
use JumpGateGaming\Wargaming\Models\Response\Success;
use JumpGateGaming\Wargaming\Traits\CallsApi;
use JumpGateGaming\Wargaming\Traits\ConvertsToModels;

class Route
{
    /**
     * This class makes API calls to wargaming.
     */
    use CallsApi;

    /**
     * Allows converting json objects to valid models.
     */
    use ConvertsToModels;

    /**
     * The route config.
     *
     * @var object
     */
    public $config;

    /**
     * Load a routes configs to use for the call.
     *
     * @param object $config
     *
     * @return static
     */
    public static function loadConfig($config)
    {
        $route = new static;
        $route->config = $config;

        return $route;
    }

    /**
     * @param array $arguments
     *
     * @return \JumpGateGaming\Wargaming\Models\Response\Error|\JumpGateGaming\Wargaming\Models\Response\Success
     * @throws \Exception
     */
    public function send($arguments = [])
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
        if (!isset($this->config->route)) {
            throw new \Exception('You are missing the route property in your reference file.');
        }

        return $this->config->route;
    }

    /**
     * Make sure a model is set.
     *
     * @return mixed
     * @throws \Exception
     */
    protected function getModel()
    {
        if (!isset($this->config->model)) {
            throw new \Exception('You are missing the model property in your reference file.');
        }

        return $this->config->model;
    }
}
