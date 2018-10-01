<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/1/2018
 * Time: 10:14 PM
 */

namespace Electronic\Assets\Facades;

use Illuminate\Support\Facades\Facade;
use Electronic\Assets\Assets;

class AssetsFacade extends Facade
{
    /**
     * @return string
     * @author Toinn
     */
    protected static function getFacadeAccessor()
    {
        return Assets::class;
    }
}