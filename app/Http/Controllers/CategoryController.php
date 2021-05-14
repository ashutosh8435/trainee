<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Blog;
use App\models\BlogCategory;
use App\http\Requests\CategoryRequest;
class CategoryController extends Controller
{
    public function index()
    {
        return view('category');
    }

    public function store(CategoryRequest $request)
    {
        $category=Category::create([
            'name'=>$request->name,
            'type'=>$request->type,
        ]);
        
        return redirect()->back()->with('success','category data insert successfully');
    }
}
