<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/2/2018
 * Time: 9:37 PM
 */

namespace Electronic\Products\Providers;

use Illuminate\Support\ServiceProvider;

class ProductsServiceProvider extends ServiceProvider
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
        $this->mergeConfigFrom(__DIR__ . '/../../config/products.php', 'products');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'products');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'products');
    }
}