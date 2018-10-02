<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/2/2018
 * Time: 9:40 PM
 */

namespace Electronic\Products\Http\Controllers;

use App\Http\Controllers\Controller;
use Datatables;
use Electronic\Users\Models\User;
use Assets;

class ProductsController extends Controller
{
    public function index()
    {
        Assets::addStylesheets(['dataTables']);
        Assets::addJavascript(['dataTables']);
        $containerHeader = trans('bases::layouts.container_header.products');
        return view('products::index.index', compact('containerHeader'));
    }

    public function listProducts()
    {
        return Datatables::of(User::query())->make(true);
    }
}