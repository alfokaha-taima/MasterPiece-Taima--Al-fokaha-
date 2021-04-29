<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $table = "products";
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function favorite(){
    //     return $this->hasMany(Favorite::class);
    //  }

    public function favorite_to_user(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
