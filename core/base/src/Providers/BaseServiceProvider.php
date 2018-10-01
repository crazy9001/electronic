<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/1/2018
 * Time: 10:07 PM
 */

namespace Electronic\Base\Providers;

use Electronic\Assets\Providers\AssetsServiceProvider;
use Electronic\Auth\Providers\AuthServiceProvider;
use Electronic\Dashboard\Providers\DashboardServiceProvider;
use Electronic\Users\Providers\UsersServiceProvider;
use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     * @author Toinn
     */
    public function register()
    {
        $this->app->register(AssetsServiceProvider::class);
    }

    /**
     * Boot the service provider.
     * @return void
     * @author Toinn
     */
    public function boot()
    {
        $this->app->register(ComposerServiceProvider::class);
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(UsersServiceProvider::class);
        $this->app->register(DashboardServiceProvider::class);

        $this->mergeConfigFrom(__DIR__ . '/../../config/electronic.php', 'electronic');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'bases');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'bases');
    }
}