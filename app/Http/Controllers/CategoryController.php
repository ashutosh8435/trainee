<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Blog;
use App\models\BlogCategory;
class CategoryController extends Controller
{
    public function index()
    {
        return view('category');
    }

    public function store(Request $request)
    {
      
        $request->validate([
            'name' => 'required|min:3|max:191',
            'type' => 'required|min:3|max:191',
        ]);
       

        $category=Category::create([
            'name'=>$request->name,
            'type'=>$request->type,
        ]);
        
        return redirect()->back()->with('success','category data insert successfully');
    }
}
