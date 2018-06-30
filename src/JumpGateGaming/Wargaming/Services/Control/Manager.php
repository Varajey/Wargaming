<?php

namespace JumpGateGaming\Wargaming\Services\Control;

class Manager
{
    /**
     * @var \JumpGateGaming\Wargaming\Services\Control\Handler
     */
    protected $handler;

    /**
     * Set up the handler for the game being requested.
     *
     * @param string $game
     */
    public function __construct($game)
    {
        $this->handler = Handler::start($game);
    }

    /**
     * Convert the called method into a callable class.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return $this->handler
            ->setName($name)
            ->setArguments($arguments);
    }
}
