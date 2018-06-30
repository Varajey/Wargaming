<?php

namespace JumpGateGaming\Wargaming\Traits;

trait CallsApi
{
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
        ];

        $parameters = array_merge($default, $parameters);

        return http_build_query($parameters);
    }
}
