<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $table="categories";
    public function blogs()
    {
        return $this->belongsTo('App\Models\Blog');
    }
}
