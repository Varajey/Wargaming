<?php

namespace JumpGateGaming\Wargaming\Services\Client;

use GuzzleHttp\Client as GuzzleClient;
use JumpGateGaming\Wargaming\Services\Client\Regions\Na;
use JumpGateGaming\Wargaming\Services\Warships\Manager as WarshipsManager;

class Client
{
    protected $baseUrl = '';

    protected $client;

    protected $region;

    public function __construct()
    {
        $this->region = new Na;
        $this->client = new GuzzleClient([
            'base_uri' => $this->region->getUrl()
        ]);
    }

    public function setRegion($region)
    {
        $class = '\JumpGateGaming\Wargaming\Services\Client\Regions\\' . ucfirst($region);
        $this->region = new $class;

        $this->client = new GuzzleClient([
            'base_uri' => $this->region->getUrl()
        ]);
    }

    public function tanks()
    {
        return 'tanks';
    }

    public function warships()
    {
        return new WarshipsManager;
    }

    public function warplanes()
    {
        return 'warplanes';
    }
}
