<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productt extends Model
{
    
    protected $table = "productts";
    
    public function category()
    {
        return $this->belongsTo(Categoryyo::class);
    }
}
