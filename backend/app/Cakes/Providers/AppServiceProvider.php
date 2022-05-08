<?php

namespace App\Cakes\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Cakes\Models\Repositories\CakeRepositoryInterface',
            'App\Cakes\Models\Repositories\CakeRepository'
        );
    }
}
