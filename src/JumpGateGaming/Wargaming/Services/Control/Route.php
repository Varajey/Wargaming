<?php

namespace JumpGateGaming\Wargaming\Services\Control;

use JumpGateGaming\Wargaming\Models\Response\Error;
use JumpGateGaming\Wargaming\Models\Response\Success;

class Route
{
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
        $route         = new static;
        $route->config = $config;

        return $route;
    }

    /**
     * Make a call to the API.  Convert the results to models.
     *
     * @param array $arguments
     *
     * @return \JumpGateGaming\Wargaming\Models\Response\Error|\JumpGateGaming\Wargaming\Models\Response\Success
     * @throws \Exception
     */
    public function send($arguments = [])
    {
        $verb    = $this->getVerb();
        $objects = $this->{$verb}($this->getRoute(), $arguments);

        if ($objects->status === 'error') {
            return new Error($objects);
        }

        dd($objects);

        $objects->data = $this->convertToModels($objects->data);

        return new Success($objects);
    }
    /**
     * Call a GET route on the API.
     *
     * @param string $route
     * @param array  $parameters
     *
     * @return mixed
     */
    public function get($route, $parameters)
    {
        $client = app('wargaming');
        $url    = $route . '?' . $this->buildQuery($parameters);

        $response = $client->client->get($url);

        return json_decode(
            $response->getBody()->getContents()
        );
    }

    /**
     * Ad the application_id to all calls.
     *
     * @param array $parameters
     *
     * @return string
     */
    protected function buildQuery($parameters)
    {
        $default = [
            'application_id' => config('services.wargaming.client_secret'),
            'language'       => config('gaming.wargaming.language'),
        ];

        $parameters = array_merge($default, $parameters);
        $requiredParameters = array_flip(
            (array)$this->config->required_arguments
        );
        $missingRequirements = array_diff_key($requiredParameters, $parameters);

        // Make sure we have all required parameters.
        if (count($missingRequirements) > 0) {
            throw new \InvalidArgumentException(
                'You are missing required fields: '. implode(', ', $missingRequirements)
            );
        }

        return http_build_query($parameters);
    }

    /**
     * Convert a set of json objects to valid models.
     *
     * @param mixed $objects
     *
     * @return $this
     */
    protected function convertToModels($objects)
    {
        return supportCollector($objects)
            ->transform(function ($object) {
                $class = $this->getModel();

                return new $class($object);
            });
    }

    /**
     * Make sure a route is set.
     *
     * @return string
     * @throws \Exception
     */
    protected function getRoute()
    {
        if (! isset($this->config->route)) {
            throw new \Exception('You are missing the route property in your reference file.');
        }

        return $this->config->route;
    }

    /**
     * Make sure a model is set.
     *
     * @return string
     * @throws \Exception
     */
    protected function getModel()
    {
        if (! isset($this->config->model)) {
            throw new \Exception('You are missing the model property in your reference file.');
        }

        return $this->config->model;
    }

    /**
     * Make sure a verb is set.
     *
     * @return string
     * @throws \Exception
     */
    protected function getVerb()
    {
        if (! isset($this->config->verb)) {
            throw new \Exception('You are missing the verb property in your reference file.');
        }

        return $this->config->verb;
    }
}
