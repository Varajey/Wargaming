<?php

namespace JumpGateGaming\Wargaming\Providers;

use Illuminate\Support\ServiceProvider;
use JumpGateGaming\Wargaming\Services\Client\Client;

class WargamingServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('wargaming', function () {
            return new Client;
        });

        $this->mergeConfigFrom(
            __DIR__ . '/../../../config/wargaming.php', 'gaming.wargaming'
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadConfigs();
        $this->loadCommands();
    }

    /**
     * Load the configs.
     *
     * @return void
     */
    protected function loadConfigs()
    {
        $this->publishes([
            __DIR__ . '/../../../config/wargaming.php' => config_path('gaming/wargaming.php'),
        ]);
    }

    private function loadCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([]);
        }
    }
}
