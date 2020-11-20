<?php

namespace Bytelaunch\ReadonlyOnUpdate;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Fields\Field;
use Laravel\Nova\Nova;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->app->booted(function () {
            Field::macro('readonlyOnUpdate', function ($options = []) {

                if (stripos($_SERVER['REQUEST_URI'], '/update-fields?') !== false) {

                    return $this->readonly();

                }

                return $this;
            });
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
