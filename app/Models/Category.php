<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $table="categories";
    protected $fillable=['cname','blog_id' ];

    public function blogs()
    {
        return $this->belongsTo(Blog::class);
    }
}
