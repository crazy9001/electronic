<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/2/2018
 * Time: 8:07 PM
 */

namespace App\Helpers;

use Sentinel;
use Helper;
use URL;
use Route;
use Permission;

class MenuItemHelper
{
    /**
     * Function to get menu items
     *
     * @return type Array
     * @author Toinn
     */
    public static function getMenu()
    {
        $roles = Helper::getCurrentUserRole();
        $menuNavigationItems = config('menuitems.' . $roles[0]['slug']);
        return self::getMenuView($menuNavigationItems);
    }

    /**
     * Function to get menu view for dashboard
     *
     * @author Toinn
     */
    public static function getMenuView($menuNavigationItems)
    {
        $route_current = Route::currentRouteName();
        $menu = '';
        $icons = config('menuitems.Icons');

        if (is_array($menuNavigationItems) && count($menuNavigationItems) > 0) {
            foreach ($menuNavigationItems as $key => $value) {
                if (is_array($value)) {
                    $menu .= '<li class="' . (in_array($route_current, array_values($value)) ? 'active' : '') . '">'
                        . '<a href="#">'
                        . (isset($icons[$key]) ? $icons[$key] : '')
                        . '<span class="name">' . $key . '</span>' . (isset($key) && isset($badget_key_value[$key]) ? '<span class="label label-warning label-s pull-right r-mar-10">' . (!empty($badget_key_value[$key]) ? $badget_key_value[$key] : '0') . '</span>' : '' )
                        . '<span class="fa expand"></span>'
                        . '</a>'
                        . '<ul class="nav nav-second-level collapse">'
                        . self::getMenuView($value)
                        . '</ul>'
                        . '</li>';
                } else {
                    $menu .= '<li class="' . ($route_current == $value ? 'active' : '') . '">'
                        . '<a href="' . ( Route::has($value) ? URL::route($value) : URL::to('login') ) . '">'
                        . (isset($icons[$key] ) ? $icons[$key] : '')
                        . '<span class="name">' . $key . '</span>' . (isset($key) && isset($badget_key_value[$key]) ? '<span class="label label-warning label-s pull-right r-mar-10">' . (!empty($badget_key_value[$key]) ? $badget_key_value[$key] : '0') . '</span>' : '' )
                        . '</a>'
                        . '</li>';
                }
            }
        }
        return $menu;
    }
}