<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table="blogs";
    
  
    protected $fillable=['title','content'];
    // public function Category()
    // {
    //     return $this->hasmany(Category::class);
    // }

    public function blogcategory(){
        return $this->hasone('App\Models\BlogCategory')->with('category');
    }

}

