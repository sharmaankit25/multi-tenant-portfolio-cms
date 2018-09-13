<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Tools\Helper;
use App\Tools\Unique;

class ToolsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Helper', function () {
            return new Helper;
        });

        $this->app->bind('Unique', function () {
            return new Unique;
        });
    }
}
