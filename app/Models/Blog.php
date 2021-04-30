<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function Category()
    {
        return $this->hasOne('App\Models\Category');
    }
}

