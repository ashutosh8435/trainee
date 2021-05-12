<?php

namespace App\Http\Controllers;

use App\Models\ourprice;
use Illuminate\Http\Request;

class OurpriceController extends Controller
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
        return view('priceadmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
         $res= new ourprice;
         $res->pname=$request->input('pname');
         $res->price=$request->input('price');
         $res->title=$request->input('title');
         $res->description=$request->input('description');
         $res->save();
         $request->session()->flash('msg','data submitted');
     
         return response()->json(['success'=>'Register successfully!' ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ourprice  $ourprice
     * @return \Illuminate\Http\Response
     */
    public function show(ourprice $ourprice)
    {
        return view('price')->with('pricearr',ourprice::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ourprice  $ourprice
     * @return \Illuminate\Http\Response
     */
    public function edit(ourprice $ourprice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ourprice  $ourprice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ourprice $ourprice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ourprice  $ourprice
     * @return \Illuminate\Http\Response
     */
    public function destroy(ourprice $ourprice, $id)
    {
        ourprice::destroy(array('id',$id));
        return redirect('price');
    }
}
