<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class userController extends Controller
{
    public function index()
    {
        $user= User::all();
        return view('dashboard.user', compact('user'));
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        
        $user = User::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->paginate(4);

    
        // Return the search view with the resluts compacted
        return view('dashboard.user', compact('user'));
    }

    public function delete($id){
        User::destroy($id);
       ;
        return back()->with('success', 'User deleted!');
    }
    
}
