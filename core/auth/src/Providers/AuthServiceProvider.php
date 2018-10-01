<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/1/2018
 * Time: 10:49 PM
 */

namespace Electronic\Auth\Providers;

use Electronic\Auth\Http\Middleware\Authenticate;
use Electronic\Auth\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     * @author Toinn
     */
    public function register()
    {
        /**
         * @var Router $router
         */
        $router = $this->app['router'];

        $router->aliasMiddleware('auth', Authenticate::class);
        $router->aliasMiddleware('guest', RedirectIfAuthenticated::class);
    }
    /**
     * Boot the service provider.
     * @return void
     * @author Toinn
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->mergeConfigFrom(__DIR__ . '/../../config/auth.php', 'auth');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'auth');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'auth');
    }
}