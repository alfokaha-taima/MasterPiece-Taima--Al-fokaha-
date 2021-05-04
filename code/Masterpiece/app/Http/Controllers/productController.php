<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\City;
class productController extends Controller
{
    public function index(){
        // $product= new Product();
        $product= Product::where('approve','1')->get();
        $products = $product->all();
        $category = new Category();
        $categories =  $category->all();
        $city = new City();
        $cities =  $city->all();
        
        

        return view('dashboard.Product', compact('products', 'categories','users','cities'));
    }


    function store(Request $req)
    {
      
        

        $validateData = $req->validate([
            'name' => 'required|min:3|alpha_dash',
            'price' => 'required',
            'city' => 'required',
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

        
        
        $product =Product::find($req['id']);
        $product->name     = $req['name'];
        $product->price   = $req['price'];
        $product->city   = $req['city'];
        $product->desc   = $req['desc'];
        $product->category_id = $req['category_id'];
        $product->image    = $imageName;
        $product->save();
        return redirect('/Upload_Item');

    }


    function approval(Request $req)
    {

        $validateData = $req->validate([
            'name' => 'required|min:3|alpha_dash',
            'price' => 'required',
            'city' => 'required',
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


        
        $product = new Product();
        $product->name     = $req['name'];
        $product->price   = $req['price'];
        $product->city   = $req['city'];
        $product->desc   = $req['desc'];
        $product->category_id = $req['category_id'];
        $product->image    = $imageName;
        $product->save();
        $req->session()->flash('success','Approved Successfully');


        
        return redirect()->back();
       

    }






    public function edit($id){
      $productModel=new Product();
      $product=$productModel->find($id);
      $category = new Category();
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
        $var = Product::find($id);
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
        $var=Product::find($id);
        $var->delete();
        return back()->with('success', 'Product deleted!');
    }

    public function addToWishlist(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            echo"<pre>";print_r($data);die;
        }
      
     }

    
}
