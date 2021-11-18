<?php

namespace App\Http\Controllers;

use App\Models\BusRoute;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;

class MainController extends Controller
{
    //
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $routes = City::all();
        echo '<pre>';
        var_dump($routes);
        echo '</pre>';
        return view('pages.index');
    }
}
