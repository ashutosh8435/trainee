<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dummy;
class DummyController extends Controller
{
    //
    function getdata()
    {
          return Dummy::select("select * from Dummy");
    }
}
