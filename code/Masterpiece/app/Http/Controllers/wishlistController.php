<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\User;
use App\wish_list;
use Auth;
use Session;

class wishlistController extends Controller
{
public function __construct(){
    $this->middleware('auth');
}
public function addToCart(Request $request){ 
    $user=Auth::user();
$cart= new wish_list;
$cart->user_id=auth()->user()->id;
$cart->productID=$request->product_id;
$status=wish_list::where('user_id',Auth::user()->id)
->where('productID',$request->product_id)
->first();

if(isset($status->user_id) and      isset($request->product_id))
{
    $request->session()->flash('success','Your already added this item to favotite');
    return redirect()->back();}
else
{
    $request->user()->products()->save($cart);
    return redirect('/add-to-wishlist');

}

   
   

// $cart->save();

// $user=Auth::user();
//         $products=Product::where('user_id',$user->id)->orderBy('id','desc')->paginate(2);
}
public function index(){
    // $product = new Product();
    // $products =  $product->all();


    // $cart = new wish_list();
    // $carts =  $cart->all();
    // return view('public_side.wishlist')->w;ith('carts','products');
    $user_id=auth()->user()->id;
    $products=DB::table('wish_lists')
    ->join('products','wish_lists.productID','=','products.id')
    ->where('wish_lists.user_id',$user_id)
    ->select('products.*')
    ->get();
  
    
       return view('public_side.wishlist',compact('products'));


}
public function destroy($id){
    $var=wish_list::find($id);
    $var->destroy();
    return back()->with('success', 'User deleted!');
}





// public function show(){
        
       
//     $carts=DB::table('wish_lists')
//     ->leftjoin('products', 'products.id', '=', 'wish_lists.productID')
//     ->select('wish_lists.id as cid','products.*')
  
//     ->where('wish_lists.userID','=',Auth::id())
//     ->get();
//     //->paginate(3);       
//     return view('public_side.wishlist')->with('carts',$carts);
// }
}
