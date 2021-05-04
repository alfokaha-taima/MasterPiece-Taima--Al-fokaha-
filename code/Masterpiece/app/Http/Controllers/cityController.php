<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class cityController extends Controller
{
    function store(Request $req)
    {

        $validateData = $req->validate([
            'city_name' => 'required|min:3|alpha_dash',
           
        ]);
      
        $city=new City();
        $city->city_name =$req['city_name'];
       
        $city->save();
        return redirect('/City'); 
        }


    public function index()
    {
        $city= new City();
        $cities = $city->all();
        return view('dashboard.city', compact('cities'));

    } 
    public function destroy($id)
    {
        $var = City::find($id);
        $var->delete();
        return back()->with('success', 'User deleted!');
    }
}
