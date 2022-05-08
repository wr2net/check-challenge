<?php

namespace App\Emails\Providers;

use App\Emails\Models\Email;
use App\Observers\EmailObserver;
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
        Email::observe(EmailObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Emails\Models\Repositories\EmailRepositoryInterface',
            'App\Emails\Models\Repositories\EmailRepository'
        );
    }
}
