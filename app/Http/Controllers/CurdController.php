<?php

namespace App\Http\Controllers;

use App\Models\Curd;
use Illuminate\Http\Request;

class CurdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res= new Curd;
        $res->name=$request->input('name');
        $res->title=$request->input('title');
        $res->description=$request->input('description');
        $res->save();
        $request->session()->flash('msg','data submitted');
        return redirect('show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curd  $curd
     * @return \Illuminate\Http\Response
     */
    public function show(Curd $curd)
    {
        return view('show')->with('showarr',Curd::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curd  $curd
     * @return \Illuminate\Http\Response
     */
    public function edit(Curd $curd,$id)
    {
        return view('edit')->with('showarr',Curd::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curd  $curd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curd $curd)
    {
       $res=Curd::find($request->id);
       $res->name=$request->input('name');
       $res->title=$request->input('title');
       $res->description=$request->input('description');
    
        $res->save();
        $request->session()->flash('msg','data updated');
        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curd  $curd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curd $curd,$id)
    {
        Curd::destroy(array('id',$id));
        return redirect('show');
    }
}
