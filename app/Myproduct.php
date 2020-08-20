<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myproduct extends Model
{
    public function getProduct(){
       return $this->hasMany('App\Product','id','product_id');
    }
}
