<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/1/2018
 * Time: 10:13 PM
 */

namespace Electronic\Assets\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Electronic\Assets\Facades\AssetsFacade;

class AssetsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     * @author Toinn
     */
    public function register()
    {
        AliasLoader::getInstance()->alias('Assets', AssetsFacade::class);
    }

    /**
     * Boot the service provider.
     * @return void
     * @author Toinn
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/assets.php', 'assets');
    }
}