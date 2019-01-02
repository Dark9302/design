<?php

namespace App\Providers;

use App\Libs\getAge;
use Illuminate\Support\ServiceProvider;

class AgeServiceProvider extends ServiceProvider
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
        //
        $this->app->bind('age', function(){
            return new getAge();
        });
    }
}
