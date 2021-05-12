<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table="blogs";
    public function Category()
    {
        return $this->hasmany(Category::class);
    }
}

