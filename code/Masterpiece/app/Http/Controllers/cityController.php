<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class cityController extends Controller
{
    public function index()
    {
        $city= new City();
        $cities = $city->all();
        return view('dashboard.Product', compact('$cities'));

    } 
}
