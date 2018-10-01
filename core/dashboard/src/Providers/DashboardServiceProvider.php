<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/2/2018
 * Time: 1:07 AM
 */

namespace Electronic\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     * @author Toinn
     */
    public function register()
    {

    }
    /**
     * Boot the service provider.
     * @return void
     * @author Toinn
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->mergeConfigFrom(__DIR__ . '/../../config/dashboard.php', 'dashboard');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'dashboard');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'dashboard');
    }
}