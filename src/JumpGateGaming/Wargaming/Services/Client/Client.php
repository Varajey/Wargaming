<?php

namespace JumpGateGaming\Wargaming\Services\Client;

use GuzzleHttp\Client as GuzzleClient;
use JumpGateGaming\Wargaming\Services\Client\Regions\Na;
use JumpGateGaming\Wargaming\Services\Control\Manager;

class Client
{
    /**
     * Guzzle client used for calling the API.
     *
     * @var \GuzzleHttp\Client
     */
    public $client;

    /**
     * The URL all calls will use.  Determined by region.
     *
     * @var string
     */
    protected $baseUrl = '';

    /**
     * The region the calls should be for.
     *
     * @var \JumpGateGaming\Wargaming\Services\Client\Regions\Base
     */
    protected $region;

    /**
     * Set up a default region.
     */
    public function __construct()
    {
        $this->region = new Na;
    }

    /**
     * Switch to a specific region.
     *
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $class = '\JumpGateGaming\Wargaming\Services\Client\Regions\\' . ucfirst($region);
        $this->region = new $class;

        return $this;
    }

    /**
     * Make calls to the World of Tanks API.
     *
     * @return \JumpGateGaming\Wargaming\Services\Control\Manager
     * @throws \Exception
     */
    public function tanks()
    {
        return $this->runManager('tanks');
    }

    /**
     * Make calls to the World of Warships API.
     *
     * @return \JumpGateGaming\Wargaming\Services\Control\Manager
     * @throws \Exception
     */
    public function warships()
    {
        return $this->runManager('warships');
    }

    /**
     * Make calls to the World of Warplanes API.
     *
     * @return \JumpGateGaming\Wargaming\Services\Control\Manager
     * @throws \Exception
     */
    public function warplanes()
    {
        return $this->runManager('warplanes');
    }

    /**
     * Set up the manager that will handle calls for the specific APIs.
     *
     * @param string $game
     *
     * @return \JumpGateGaming\Wargaming\Services\Control\Manager
     * @throws \Exception
     */
    public function runManager($game)
    {
        $url = $this->region->getUrl($game);
        $this->setClient($url);

        return new Manager($game);
    }

    /**
     * Set up the Guzzle client for the region's URL.
     *
     * @param string $url
     *
     * @return $this
     */
    protected function setClient($url)
    {
        $this->baseUrl = $url;
        $this->client = new GuzzleClient([
            'base_uri' => $url,
        ]);

        return $this;
    }
}
