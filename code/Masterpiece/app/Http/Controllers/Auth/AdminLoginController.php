<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Admin;

class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin',[
        'except'=>['logout']
      ]);
    }
     
   
    public function showLoginForm()
    {
      return view('auth.admin-login');
    }

    public function login(Request $request)
    {
          $email=$request->input('email'); 
          $password=$request->input('password'); 
      // Validate the form data
      $validateData = $request->validate([
        'email' => 'required|unique:users|email',
        'password' => 'required|min:8',
        
    ]);

      
      
      // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
        // if successful, then redirect to their intended location
        return redirect()->intended('/admin');
        
    
    }
     

      // if unsuccessful, then redirect back to the login with the form data
      // return redirect()->back();
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    //logout admin
    // public function logout(Request $request){
    //     Auth::guard('admin')->logout();
    //     return redirect('/home');
    // }

    public function logout(){
   
    
  
      if(Auth::guard('admin')->check()) // this means that the admin was logged in.
      {
          Auth::guard('admin')->logout();
          return redirect()->route('admin.login');
      }

      $this->guard()->logout();
      $request->session()->invalidate();

      return $this->loggedOut($request) ?: redirect('/');
  
    
}
}