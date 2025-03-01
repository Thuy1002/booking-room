<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';


    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/auth/auth.php'));

            // Route::middleware('web')
            //     ->namespace($this->namespace)
            //     ->group(base_path('routes/Admin/types.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Admin/rooms.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Admin/service.php'));


            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Admin/categori.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Admin/type.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Admin/account.php'));


            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Admin/discount.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Admin/blog.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Admin/statistics.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Admin/home.php'));

            //client

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Client/home.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Client/room.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Client/blog.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Client/comment.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Client/booking.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Client/rate.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Client/payment.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
