<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\City;
use Illuminate\Http\Request;

class uploadItemController extends Controller
{
    
 


    function store(Request $req)
    {

        $validateData = $req->validate([
            'title' => 'required|min:3|alpha_dash',
            'price' => 'required',
            
            'desc' => 'required|min:8',
            'category_id' => 'required',
            'city_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }


        
        $product = new Product();
        $product->title     = $req['title'];
        $product->price   = $req['price'];
        
        $product->desc   = $req['desc'];
        $product->category_id = $req['category_id'];
        $product->city_id = $req['city_id'];
        $product->image    = $imageName;
        $req->user()->products()->save($product);
        $req->session()->flash('success','Your Item Created Successfully, please wait for the admin to approve on it');


        
        return redirect()->back();

    }

    function approval(Request $req)
    {

        // $validateData = $req->validate([
        //     'name' => 'required|min:3|alpha_dash',
        //     'price' => 'required',
        //     'city' => 'required',
        //     'desc' => 'required|min:8',
        //     'category_id' => 'required',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // if (!empty(request()->image)) {
        //     $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        //     request()->image->move(public_path('images'), $imageName);
        // } else {
        //     $imageName = 'default.png';
        // }


        
        $product = Product::find($req->commentId);

        $approveVal=$req->approve;
        if($approveVal=='on'){
            $approveVal=1;
        }else{
            $approveVal=0;
        }
        $product->approve=$approveVal;
        $product->save();
        // $product->name     = $req['name'];
        // $product->price   = $req['price'];
        // $product->city   = $req['city'];
        // $product->desc   = $req['desc'];
        // $product->category_id = $req['category_id'];
        // $product->image    = $imageName;
        // $product->save();
        return back();

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
            'title'=>'required',
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
        $var->name = $request->get('title');
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
        return back()->with('success', 'User deleted!');
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        
        $products = Product::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('desc', 'LIKE', "%{$search}%")
            ->paginate(4);

    
        // Return the search view with the resluts compacted
        return view('Public_side.products', compact('products'));
    }
}

