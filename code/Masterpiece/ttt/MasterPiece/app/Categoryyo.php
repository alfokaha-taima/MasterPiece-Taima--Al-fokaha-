<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoryyo extends Model
{
    protected $table = "categoryyos";
    // public $primaryKey = 'cat_id';
    // public $timestamps = true;

    public function products()
    {
        return $this->hasMany(Productt::class);
    }
}
