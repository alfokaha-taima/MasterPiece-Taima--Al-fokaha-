<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class adminController extends Controller
{
    
   public function __construct(){
       $this->middleware('auth:admin');
   }

    public function index()
    {
        $admin = Admin::all();
        return view('dashboard.Admin', compact('admin'));
    }
    
    
    
    function store(Request $req)
    {

        $validateData = $req->validate([
            'name' => 'required|min:3|alpha_dash',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8|max:16',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }


        
        $admin = new Admin();
        $admin->name     = $req['name'];
        $admin->email    = $req['email'];
        $admin->password = Hash::make($req['password']);
        $admin->image    = $imageName;
        $admin->save();
        return redirect('/admin');

    }
    public function edit($id) {
        $adminModel = new Admin();
        $admin = $adminModel->find($id);
        return view('dashboard.editadmin', compact('admin'));
    }


    
    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'password' => 'required|min:6|max:16',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }
        $var = Admin::find($id);
        $var->name = $request->get('name');
        $var->email = $request->get('email');
        // $var->role = $request->get('type');
        $var->password = Hash::make($request->get('password'));
        $var->image = $imageName;
        $var->save();
        return redirect('Admin')->with('success', 'Contact updated!');
    }

    public function destroy($id)
    {
        $var = Admin::find($id);
        $var->delete();
        return back()->with('success', 'User deleted!');
    }
    

}
