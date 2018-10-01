<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/2/2018
 * Time: 1:23 AM
 */

namespace Electronic\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $containerHeader = trans('bases::layouts.container_header');
        return view('dashboard::index.index', compact('containerHeader'));
    }
}