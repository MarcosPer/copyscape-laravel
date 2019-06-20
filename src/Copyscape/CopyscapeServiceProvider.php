<?php
namespace Marcosper\CopyscapeLaravel;

use Illuminate\Support\ServiceProvider;
use Marcosper\Copyscape\Copyscape;
use Illuminate\Support\Facades\Request;

class CopyscapeServiceProvider extends ServiceProvider {
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . './../config/config.php' => config_path('copyscape.php'),
        ], 'config');
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('copyscape', function($app){
            $copyscape = new Copyscape();
            $copyscape->addCredentials(config('copyscape.username'),config('copyscape.key'));
            if(config('copyscape.ssl',true)) $copyscape->forceSSL(config('copyscape.ssl'));
            $copyscape->setDebug(config('copyscape.debug'));
            $copyscape->ignoreDomain(Request::getHost());
            return $copyscape;
        });
    }
}