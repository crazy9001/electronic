<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/2/2018
 * Time: 1:16 AM
 */

namespace Electronic\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use Permission;
use App as App;

class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Toinn
     */
    public function getDashboard()
    {
        if (Permission::isSuperAdmin() || Permission::isSystemAdmin()) {
            return $superAdmin = App::make('Electronic\Dashboard\Http\Controllers\SuperAdminController')->index();
        }elseif (Permission::isUser()) {
            return $registeredUser = App::make('Electronic\Dashboard\Http\Controllers\RegisteredUsersController')->index();
        }
    }
}