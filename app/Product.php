<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   

    public function categorie(){
        return $this->belongsTo('App\Categorie');
    }

  
    public function users(){
        return $this->belongsToMany(User::class, 'user_products', 'product_id', 'user_id');
    }
       
}
