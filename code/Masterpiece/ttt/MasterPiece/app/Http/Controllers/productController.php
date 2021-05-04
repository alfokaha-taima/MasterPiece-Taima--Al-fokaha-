<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productt;
use App\Categoryyo;
class productController extends Controller
{
    public function index(){
        $product= new Productt();
        $products = $product->all();
        $category = new Categoryyo();
        $categories =  $category->all();

        return view('dashboard.Product', compact('products', 'categories'));


    }


    function store(Request $req)
    {

        $validateData = $req->validate([
            'name' => 'required|min:3|alpha_dash',
            'price' => 'required',
            'desc' => 'required|min:8',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }


        
        $product = new Productt();
        $product->name     = $req['name'];
        $product->price   = $req['price'];
        $product->desc   = $req['desc'];
        $product->category_id = $req['category_id'];
        $product->image    = $imageName;
        $product->save();
        return redirect('/Product');

    }
    public function edit($id){
      $productModel=new Productt();
      $product=$productModel->find($id);
      $category = new Categoryyo();
      $categories =  $category->all();
      return view('dashboard.editproduct',compact('product','categories'));
    }
    
    public function update(Request $request, $id){
        request()->validate([
            'name'=>'required',
            'price'=>'required',
            'desc'=>'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }
        $var = Productt::find($id);
        $var->name = $request->get('name');
        $var->price = $request->get('price');
        $var->desc = $request->get('desc');
        $var->category_id = $request->get('category_id');
        // $var->role = $request->get('type');
      
        $var->image = $imageName;
        $var->save();
        return redirect('Product')->with('success', 'Contact updated!');
    
    }
    public function destroy($id){
        $var=Productt::find($id);
        $var->delete();
        return back()->with('success', 'User deleted!');
    }
}
