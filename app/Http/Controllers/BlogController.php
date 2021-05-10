<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\category;
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
        $category->user_c="category user";
        $category->email_c="category@gmail.com";
        $category->category_name="laravel category";
        $blog->categories()->save($category);
        return "category has been created successfully";
    }
}
