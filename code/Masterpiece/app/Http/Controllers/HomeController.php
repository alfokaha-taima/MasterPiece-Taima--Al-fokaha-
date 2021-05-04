<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Value;
use App\User;
use App\City;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
            // $product= new Product();
            // $products = $product->latest()->paginate(10);
            // $category= new Category();
            // $categories = $category->has("products")->get();
            // return view('home', compact('products', 'categories'));
            return view('home')->with([
                "products"=>Product::where('approve','1')->latest()->paginate(10),
                "categories"=>Category::has("products")->get(),

            ]);
            
            // "products"=>Product::latest()->paginate(10),
            // "categories"=>Category::has("products")->get(),
        
    }
    public function getCategoryProducts(Category $category_id)
    {
            
            // $product= new Product();
            // $products = $product->latest()->paginate(10);
            // $category= new Category();
            // $categories = $category->has("products")->get();
            // return view('home', compact('products', 'categories'));
            $products=Product::where('category_id',$category_id->id)->where('approve','1')->paginate(5);
            $categories= Category::has("products")->get();
            $user = new User();
        $users =  $user->all();
        $city = new City();
        $cities =  $city->all();
            return view('public_side.products',compact('categories','products','users','cities'));

            }




            // public function show(Product $product_id){
            // // return view("products.show")->withProduct($product);
            // $products=Product::where('product_id',$product_id->id)->get();
            // // $categories= Category::has("products")->get();
            // return view("public_side.singleProduct",compact('products'));
            // }
            public function show($product_id)
{
    $products=Product::where('id', $product_id)->first();
    return view('Public_side.singleProduct',compact('products'));
}
}
