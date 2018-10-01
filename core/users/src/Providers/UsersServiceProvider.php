<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/2/2018
 * Time: 12:09 AM
 */

namespace Electronic\Users\Providers;

use Electronic\Users\Models\User;
use Electronic\Users\Repositories\Eloquent\DbUsersRepository;
use Electronic\Users\Repositories\Interfaces\UsersInterface;
use Illuminate\Support\ServiceProvider;

class UsersServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     * @author Toinn
     */
    public function register()
    {
        $this->app->singleton(UsersInterface::class, function () {
            return new DbUsersRepository(new User());
        });
    }
    /**
     * Boot the service provider.
     * @return void
     * @author Toinn
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->mergeConfigFrom(__DIR__ . '/../../config/users.php', 'users');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'users');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'users');
    }
}