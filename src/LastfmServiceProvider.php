<?php

declare(strict_types=1);

namespace Barryvanveen\Lastfm;

use Illuminate\Support\ServiceProvider;

class LastfmServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/lastfm.php' => config_path('lastfm.php'),
        ], 'config');
    }

    /**
     * Register any package services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/lastfm.php', 'lastfm');

        $this->app->bind(Lastfm::class, function () {
            return new Lastfm(new \GuzzleHttp\Client(), config('lastfm.api_key'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Lastfm::class];
    }
}
