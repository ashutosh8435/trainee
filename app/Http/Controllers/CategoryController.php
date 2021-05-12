<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Redirect, Response;
class categoryController extends Controller
{
    public function index()
    {
        return view('category');
    }

    public function store(Request $request)
    {
            $data=request()->validate([
                'cname'=>'required',
                'blog_id'=>'required',

            ]);

            Category::create($data);
            return Redirect::to('category')->withSuccess('category has been successfully');
    }
}
