<?php

namespace JumpGateGaming\Wargaming\Services\Client;

use GuzzleHttp\Client as GuzzleClient;
use JumpGateGaming\Wargaming\Services\Client\Regions\Na;
use JumpGateGaming\Wargaming\Services\Tanks\Manager as TankManager;
use JumpGateGaming\Wargaming\Services\Warplanes\Manager as WarplanesManager;
use JumpGateGaming\Wargaming\Services\Warships\Manager as WarshipsManager;

class Client
{
    public $client;

    protected $baseUrl = '';

    protected $region;

    public function __construct()
    {
        $this->region = new Na;
    }

    public function setRegion($region)
    {
        $class = '\JumpGateGaming\Wargaming\Services\Client\Regions\\' . ucfirst($region);
        $this->region = new $class;

        return $this;
    }

    protected function setClient($url)
    {
        $this->baseUrl = $url;
        $this->client = new GuzzleClient([
            'base_uri' => $url,
        ]);

        return $this;
    }

    public function tanks()
    {
        $url = $this->region->getUrl('tank');
        $this->setClient($url);

        return new TankManager;
    }

    public function warships()
    {
        $url = $this->region->getUrl('warships');
        $this->setClient($url);

        return new WarshipsManager;
    }

    public function warplanes()
    {
        $url = $this->region->getUrl('warplanes');
        $this->setClient($url);

        return new WarplanesManager;
    }
}
