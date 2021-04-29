<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wish_list extends Model
{
    public $table="wish_lists";
    

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
