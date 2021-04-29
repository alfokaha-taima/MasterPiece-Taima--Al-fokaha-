<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','mobile','password','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $table = "users";

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function favorite_products(){
        return $this->belongToMany('App\Product')->withTimestamps();
    }



    

    public function whishlist(){
        return $this->belongsToMany(Product::class,'favorites');
     }






//     public function wishlist(){
//         return $this->belongsToMany(Product::class,'wish_lists');
//     }

    public function wishlistHas($producId){
return self::wishlist()->where('product_id',$productId)->exists();
    }
}
