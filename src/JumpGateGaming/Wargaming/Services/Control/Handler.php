<?php

namespace JumpGateGaming\Wargaming\Services\Control;

class Handler
{
    /**
     * The game being called.
     *
     * @var string
     */
    public $game = null;

    /**
     * The name of the section.
     *
     * @var string
     */
    public $name = null;

    /**
     * Any arguments passed to the section call.
     *
     * @var array
     */
    public $arguments = [];

    /**
     * Helper method to enter the class.
     *
     * @param string $game
     *
     * @return static
     */
    public static function start($game)
    {
        $handler       = new static;
        $handler->game = $game;

        return $handler;
    }

    /**
     * Set the name that contains the routes for this call.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the name that contains the routes for this call.
     *
     * @param string $arguments
     *
     * @return $this
     */
    public function setArguments($arguments)
    {
        $this->arguments = $arguments;

        return $this;
    }

    /**
     * Convert the called method into a callable class.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     * @throws \Exception
     */
    public function __call($name, $arguments)
    {
        $parts = [
            __DIR__,
            '..',
            '..',
            'References',
            $this->game,
            $this->name,
            $name,
        ];

        // Get the config details for the route.
        $config = implode('/', $parts) .'.json';
        $config = json_decode(
            file_get_contents($config)
        );

        // Convert the magic arguments to a usable array/
        if (! empty($arguments)) {
            $arguments = head($arguments);
        }

        return Route::loadConfig($config)
            ->send($arguments);
    }
}
