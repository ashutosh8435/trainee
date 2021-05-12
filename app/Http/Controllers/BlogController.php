<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
class BlogController extends Controller
{
   public function getcategory(Blog $blog)
   {
      $category=Blog::find(1)->category;
    // return $category;
      return view('getcategory')->with('categoryarr',$category);
   }
    
}
