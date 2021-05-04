<?php

namespace App\Http\Controllers;
use App\Categoryyo;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Categoryyo::all();
        return view('dashboard.Category', compact('category'));
    } 


    function store(Request $req)
    {

        $validateData = $req->validate([
            'name' => 'required|min:3|alpha_dash',
            'desc' => 'required|min:20|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }
        $category=new Categoryyo();
        $category->name =$req['name'];
        $category->desc =$req['desc'];
        $category->image=$imageName;
        $category->save();
        return redirect('/Category'); 
        }

        public function edit($id){
        $categoryModel = new Categoryyo();
        $category      =$categoryModel->find($id);
        return view('dashboard.editcategory',compact('category'));
        }
        public function update(Request $request, $id)
        {
            request()->validate([
                'name' => 'required|min:3',
                'desc' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               
            ]);
            if (!empty(request()->image)) {
                $imageName = time() . '.' . request()->image->getClientOriginalExtension();
                request()->image->move(public_path('images'), $imageName);
            } else {
                $imageName = 'default.png';
            }
            $var = Categoryyo::find($id);
            $var->name = $request->get('name');
            $var->desc = $request->get('desc');
            // $var->role = $request->get('type');
          
            $var->image = $imageName;
            $var->save();
            return redirect('Category')->with('success', 'Contact updated!');
        }
        public function destroy($id)
        {
            $var = Categoryyo::find($id);
            $var->delete();
            return back()->with('success', 'User deleted!');
        }
}
