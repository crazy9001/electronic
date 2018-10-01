<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/1/2018
 * Time: 10:39 PM
 */

namespace Electronic\Base\Providers;

use Illuminate\Support\ServiceProvider;
use Assets;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     * @return void
     * @author Toinn
     */
    public function boot()
    {
        view()->composer(['bases::layouts.base'], function ($view) {

            $headScripts = Assets::getJavascript('top');
            $bodyScripts = Assets::getJavascript('bottom');
            $appModules = Assets::getAppModules();
            $groupedBodyScripts = array_merge($bodyScripts, $appModules);
            $view->with('headScripts', $headScripts);
            $view->with('bodyScripts', $groupedBodyScripts);
            $view->with('stylesheets', Assets::getStylesheets(['style']));
        });
    }
}