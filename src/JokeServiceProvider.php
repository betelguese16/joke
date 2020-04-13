<?php

namespace Betelguese16\Joke;

use Illuminate\Support\ServiceProvider;

class JokeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        $this->publishes([
        	__DIR__ . '/../resources/config/joke.php' => config_path('joke.php')
        ]);
    }
}
