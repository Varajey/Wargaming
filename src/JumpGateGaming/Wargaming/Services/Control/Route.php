<?php

namespace JumpGateGaming\Wargaming\Services\Control;

use JumpGateGaming\Wargaming\Models\Response\Error;
use JumpGateGaming\Wargaming\Models\Response\Success;

class Route
{
    /**
     * The route config.
     *
     * @var \JumpGateGaming\Wargaming\Models\General\Config
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
        $verb    = $this->config->verb;
        $objects = $this->{$verb}($this->config->route, $arguments);

        if ($objects->status === 'error') {
            return new Error($objects);
        }

        // When you specify an account ID, it becomes the property
        // containing the data.
        if (isset($arguments['account_id'])) {
            $accountId     = $arguments['account_id'];
            $objects->data = $objects->data->{$accountId};
        }

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

        $parameters          = array_merge($default, $parameters);
        $missingRequirements = $this->config->required_arguments
            ->flip()
            ->diffKeys($parameters);

        // Make sure we have all required parameters.
        if ($missingRequirements->count() > 0) {
            throw new \InvalidArgumentException(
                'You are missing required fields: ' . implode(', ', $missingRequirements)
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
     * @throws \Exception
     */
    protected function convertToModels($objects)
    {
        $class = $this->config->model;

        if ($this->config->model_type === 'single') {
            return new $class($objects);
        }

        return supportCollector($objects)
            ->transform(function ($object) use ($class) {
                return new $class($object);
            });
    }
}
