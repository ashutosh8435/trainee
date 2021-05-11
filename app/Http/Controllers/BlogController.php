<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
class BlogController extends Controller
{
    public function addblog()
    {
        $blog=new Blog();
        $blog->user_b="blog users";
        $blog->email_b="ashu@gmail.com";
        $blog->blog_name="aboutus";
        $blog->save();
        return "blogs has been successfully";
    }

    public function addcategory($id)
    {
        $blog= Blog::find($id);
        $category= new Category();
        $category->c_name="category 3 user";
       // $category->email_c="category3@gmail.com";
      //  $category->category_name="laravel 3 category";
        $blog->Category()->save($category);
        return "category has been created successfully";
    }
    public function getcategory($id)
    {
        $category=Blog::find($id)->category;
        return $category;
    }
}
