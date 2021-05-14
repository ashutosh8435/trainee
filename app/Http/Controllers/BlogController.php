<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\BlogCategory;
use App\http\Requests\BlogRequest;
class BlogController extends Controller
{
   
   
    public function index()
    {
       $blog= Blog::with('blogcategory')->get();
       $category= Category::with('blog')->get();
       dd($blog);
     //  return $category;   return $blog;
       return view('showrelation',compact('blog','category'));
      
    }
   public function create()
    {
        $category=Category::get();
       // return $category;
        return view('blog',compact('category'));
        
    }
   

    public function store(BlogRequest $request)
    {
      
       $blog= Blog::create([
            'title'=>$request->title,
            'content'=>$request->content,

        ]);
      
      
  BlogCategory::create([
      'category_id'=>$request['category_id'],
        'blog_id'=> $blog->id,
     ]);

       
        return redirect()->back()->with('success','blog data insert successfully');
    }

  
}
