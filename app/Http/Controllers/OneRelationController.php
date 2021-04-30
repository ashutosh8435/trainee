<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class OneRelationController extends Controller
{
    function index()
    {
        return Blog::find(1)->Category;
    }
}
