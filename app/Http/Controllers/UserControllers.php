<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
class UserControllers extends Controller
{
    
    function data3()
    {
        return DB::select("select * from dummy");
    }
}
