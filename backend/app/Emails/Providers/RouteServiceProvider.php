<?php

namespace App\Emails\Providers;

use App\Emails\Models\Email;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Emails\Controllers';

    /**
     * @var string
     */
    protected $routePath = 'Emails\Routes';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        Route::bind('email', function ($value) {
            return Email::withTrashed()->find($value);
        });

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        $path = str_replace('\\', DIRECTORY_SEPARATOR, app_path($this->routePath.'\api.php'));
        Route::prefix('api')
            ->as('api.')
//            ->middleware(['api', 'auth:api'])
            ->namespace($this->namespace.'\Api')
            ->group($path);
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        $path = str_replace('\\', DIRECTORY_SEPARATOR, app_path($this->routePath.'\web.php'));
        Route::middleware(['web', 'auth'])
            ->namespace($this->namespace.'\Web')
            ->group($path);
    }
}
