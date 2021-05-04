<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use App\Category;
use App\City;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/dashboard', 'dashboardController')->middleware('auth:admin');

Route::get('/admin/editadmin/{id}', "adminController@edit");
Route::put('/admin/updateadmin/{id}', 'adminController@update');
Route::get('/admin/delateadmin/{id}', 'adminController@destroy');


Route::resource('/Category', 'CategoryController')->middleware('auth:admin');
Route::get('/editcategory/{id}','CategoryController@edit');
Route::put('/updatecategory/{id}', 'CategoryController@update');
Route::get('/deletecategory/{id}', 'CategoryController@destroy');


Route::resource('/City', 'cityController')->middleware('auth:admin');
Route::get('/deletecity/{id}', 'cityController@destroy');




Route::resource('/Product', 'productController')->middleware('auth:admin');

// Route::get('/editproduct/{id}','productController@edit');
// Route::put('/updateproduct/{id}', 'productController@update');
Route::get('/deleteproduct/{id}', 'uploadItemController@destroy');


// Route::put('/admin/updatecategory/{id}', 'CategoryController@update');
// Route::get('/admin/deletecategory/{id}', 'CategoryController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('', 'HomeController@getCategoryProducts')->name('category.product');
Route::get('/category/products/{category_id}','HomeController@getCategoryProducts')->name('category.product');
Route::get('/search', 'uploadItemController@search')->name('search');
Route::get('/searchuser', 'userController@search')->name('searchuser');
// Route::get('/category/singleproducts/{product_id}','HomeController@show')->name('products.show');
Route::get('/singleproduct/{id}', 'HomeController@show');


Route::get('/', 'HomeController@index');
Route::post('/user/logout','Auth\LoginController@userLogout')->name('user.logout');

// Route::post('/user/logout', 'Auth\AdminLoginController@userLogout')->name('user.logout');
Route::get('/admin','adminController@index')->middleware('auth:admin')->name('admin');
Route::post('/admin','adminController@store');

Route::get('/manageUser','userController@index');
Route::get('deleteuser/{id}','userController@delete');

Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::post('/admin/logout','Auth\AdminLoginController@logout')->name('admin.logout');

// Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
// Route::group(['prefix'=>'admin'],function() {
//     Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//     Route::get('/', 'adminController@index');
//   });

 

//public pages

Route::get('/contact_Us',function(){
    return view('public_side.contactUs');
});
Route::post('/contact_Us','ContactUsController@store');
Route::get('/contactUs','ContactUsController@index');
Route::get('deletemessage/{id}','ContactUsController@delete');

// Route::get('/help',function(){
//     return view('public_side.help');
// });

// Route::get('/products',function(){
//     return view('public_side.products');
// })->name('category.products');

// Route::get('/single_Product',function(){
//     return view('public_side.singleProduct');
// })->name('product.view');
// Route::post('/products','ProductController@store')->name('product.store');
Route::get('/about_Us',function(){
    return view('public_side.aboutUs');
});

//uploadItem page
Route::get('deleteProduct/{id}','productController@destroy');

Route::get('/upload_Item',function(){

   
        $products= Product::where('approve','1')->get();
        // $products = $product->all();
        $categories =  Category::all();
        // $categories =  $category->all();
        $cities= City::all();
        // $cities = $city->all();


    return view('public_side.uploadItem', compact('products', 'categories','cities'));


    
})->middleware('auth');
Route::post('/upload_Item','uploadItemController@store')->middleware('auth');
Route::post('/toggole-approve','uploadItemController@approval');
Route::get('/Product', function(){
    
    $products= Product::all();
    // $products = $product->all();
    $categories =  Category::all();
    // $categories =  $category->all();
    $cities= City::all();
    // $cities = $city->all();


return view('dashboard.Product', compact('products', 'categories','cities'));

})->middleware('auth:admin');



Route::get('/Profile','profileController@index')->middleware('auth');
Route::get('/edit/user','profileController@editprofile')->name('user.edit');
Route::put('/edit/user','profileController@updateprofile')->name('user.update');
Route::get('profile/deleteprofile/{id}','profileController@destroyprofile');

Route::get('editproduct/{id}','profileController@edit');
Route::put('updateproduct/{id}','profileController@update');
Route::get('deleteproduct/{id}','profileController@destroy');


// Route::post('product/wishlist','WishlistController@store')->name('whishlist.store');

// Route::post('/favorite', 'FavoriteController@store');


// Route::post('add/to_wishlist/{product_id}','FavoriteController@addToWishlist');
// Route::get('/wishlist/add/{product}', 'FavoriteController@add');

// Route::group(['namespace'=>'/','middleware'=>['auth']],function(){
//    Route::post('whishlist','FavoriteController@store')->name('wishlist.store') ;
// });
// Route::get('/wishlist','wishlistController@cart')->name('wishlist');
Route::post('/add-to-cart','wishlistController@addToCart');

Route::get('/add-to-wishlist','wishlistController@index');
Route::get('deletwishlist/{id}','wishlistController@delete');








