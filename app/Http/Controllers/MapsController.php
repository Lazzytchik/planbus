<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.maps.index');
    }
}
