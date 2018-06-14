<?php

namespace JumpGateGaming\Wargaming\Traits;

trait CallsApi
{
    public function get($route, $parameters)
    {
        $client = app('wargaming');
        $url    = $route . '?' . $this->buildQuery($parameters);

        $response = $client->client->get($url);

        return json_decode(
            $response->getBody()->getContents()
        );
    }

    protected function buildQuery($parameters)
    {
        $default = [
            'application_id' => config('services.wargaming.client_secret'),
        ];

        $parameters = array_merge($default, $parameters);

        return http_build_query($parameters);
    }
}
