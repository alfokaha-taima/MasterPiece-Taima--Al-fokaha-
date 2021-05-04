<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\City;
use App\User;
use Illuminate\Http\Request;
use Auth;


class profileController extends Controller
{
    public function index(){
        $user=Auth::user();
        $products=Product::where('user_id',$user->id)->orderBy('id','desc')->paginate(2);
        


        return view('public_side.profile', compact('products','user'));


    }
  
    public function edit($id){
        $product=new Product();
        $products=$product->find($id);
        $category = new Category();
        $categories =  $category->all();
        $city = new City();
        $cities=  $city ->all();
        return view('public_side.editproduct',compact('products','categories','cities'));
      }
      public function update(Request $request, $id){
          request()->validate([
              'title'=>'required',
              'price'=>'required',
              'desc'=>'required',
              'category_id' => 'required',
              'city_id' => 'required',
            //   'city_id' => 'required',
              'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          if (!empty(request()->image)) {
              $imageName = time() . '.' . request()->image->getClientOriginalExtension();
              request()->image->move(public_path('images'), $imageName);
          } else {
              $imageName = 'default.png';
          }
          $var = Product::find($id);
          $var->title = $request->get('title');
          $var->price = $request->get('price');
          $var->desc = $request->get('desc');
          $var->category_id = $request->get('category_id');
          $var->city_id = $request->get('city_id');
          // $var->role = $request->get('type');
        
          $var->image = $imageName;
          $var->save();
          return redirect('Profile')->with('success', 'Contact updated!');
      
      }
      public function destroy($id){
          $var=Product::find($id);
          $var->delete();
          return back()->with('success', 'Product deleted!');
      }

     public function editprofile(){
         if(Auth::user()){
             $user=User::find(Auth::user()->id);
            
                if($user){
             return view('public_side.editprofile')->withUser($user);
         }else{
             return redirect()->back();
         }
        
        }else{
            return redirect()->back();
        }

     }
     public function updateprofile(Request $request){
         if (Auth::user()->email === $request['email']){
            request()->validate([
                'name'=>'required |min:3',
                'email'=>'required |email',
                'mobile'=>'required|min:10|max:14',
                'password' => 'required |min:8',
              //   'city_id' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
         } else {
            request()->validate([
                'name'=>'required |min:3',
                'email'=>'required |email|unique:users',
                'mobile'=>'required|min:10|max:14',
                'password' => 'required |min:8',
              //   'city_id' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
         }
      
         $user=User::find(Auth::user()->id);
         if($user){

            if (!empty(request()->image)) {
                $imageName = time() . '.' . request()->image->getClientOriginalExtension();
                request()->image->move(public_path('images'), $imageName);
            } else {
                $imageName = 'default.png';
            }
             $user->name =$request['name'];
             $user->email =$request['email'];
             $user->mobile =$request['mobile'];
             $user->password =$request['password'];
            //  $user->password_confirmation =$request['password_confirmation'];
             $user->image =$imageName;
             $user->save();
             $request->session()->flash('success','Your details have now been updated');
             return redirect()->back();


         }else{
             return redirect()->back();
         }
     }

}
