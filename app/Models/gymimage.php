<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gymimage extends Model
{
    protected $table="gymimages";
    protected $fillable=['title','description','image',];
}
