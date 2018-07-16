<?php

namespace Amani\VehiclePlate;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class VehiclePlateServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('plate', function () {
            return new Plate();
        });
    }
}
