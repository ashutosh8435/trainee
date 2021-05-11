<?php

namespace App\Http\Controllers;

use App\Models\gym;
use Illuminate\Http\Request;

class GymController extends Controller
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
        return view('gymadmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $res= new Gym();
        
       $res->image=$request->input('image');
        $res->title=$request->input('title');
        $res->description=$request->input('description');

        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClinetOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uplods/empimage/',$filename);
            $res->image=$filename;
        }
        else{
            return $request;
            $res->image='';
        }
        $res->save();
        $request->session()->flash('msg','data submitted');
    
        return response()->json(['success'=>'Register successfully!' ]);

    // if($request->has('image'))
    //   {
    //     $image=$request->file('image');
    //     $reimage=time().'.'.$image->getClinetOriginalExtension();
    //     $dest=public_path('/images1');
    //     $image->move($dest,$reimage);

    //     $image= new gym;
    //     $image->title=$request->title;
    //     $image->description=$request->description;
    //     $image->image=$reimage;
    //     $image->save();
    //     $request->session()->flash('msg','data submitted');
    
    //  return response()->json(['success'=>'Register successfully!' ]);
    //   }
    //   else{

    //     return response()->json(['success'=>'Register not successfully!' ]);
        
    //}


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function show(gym $gym)
    {
        return view('gym')->with('gymarr',gym::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function edit(gym $gym)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gym $gym)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function destroy(gym $gym)
    {
        //
    }
}
