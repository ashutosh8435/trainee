<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\BlogCategory;
class BlogController extends Controller
{
   
   
    public function index()
    {
       $blog= Blog::with('blogcategory')->get();
       $category= Category::with('blog')->get();
     //  return $category;   return $blog;
       return view('showrelation',compact('blog','category'));
      
    }
   public function create()
    {
        $category=Category::get();
       // return $category;
        return view('blog',compact('category'));
        
    }
   

    public function store(Request $request)
    {
      
        $request->validate([
            'title' => 'required|min:3|max:191',
            'content' => 'required|min:3|max:191',
            
        ]);
       

       $blog= Blog::create([
            'title'=>$request->title,
            'content'=>$request->content,

        ]);
      
      
  BlogCategory::create([
      'category_id'=>$request['category_id'],
        'blog_id'=> $blog->id,
     ]);

       
        return redirect()->back()->with('success','blogdata insert successfully');
    }

  
}
