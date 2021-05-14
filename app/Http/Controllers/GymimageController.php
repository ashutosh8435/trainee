<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gymimage;
use App\http\Requests\GymimageRequest;
class GymimageController extends Controller
{
      public function index()
      {
          return view('gymadmin2');
      }

      public function store(GymimageRequest $request, Gymimage $gymimages)
      {
        dd($request->file('image'));
        if ($request->file('image')) {
        
          $imagepath = $request->file('image');
          $extension=$imagepath->getClientOriginalName();
          $imageName = time().'.'.$extension;  
          $imagepath->move('images', $imageName);
        }
      
          Gymimage::create(
            [
            
              'title'=>$request->title,
              'description'=>$request->description,
              'image'=>$imageName,
            ]
            );
            return redirect()->back()->with('success','image data insert successfully');
      }

      public function show(Gymimage $gymimage)
       {
        return view('gym')->with('gymarr',Gymimage::all());
       }
      public function edit(Gymimage $gymimage,$id)
      {
        return view('gymedit')->with('gymimage',Gymimage::find($id));
      }

       public function update(GymimageRequest $request,Gymimage $gymimage,$id)
       {
        //dd($request->file('image'));
      // dd($request->all());
       $gymimage=Gymimage::find($id);   
       dd($request->file('image'));    
       //  $gymimage->title= $request->input('title');
       //$gymimage->description= $request->input('description');
    //       dd($request->file('image'));
    //      if ($request->file('image')) {
        
    //        $imagepath = $request->file('image');
    //       $extension=$imagepath->getClientOriginalName();
    //       $imageName = time().'.'.$extension;  
    //        $imagepath->move('images', $imageName);
    //        dd($extension);
    //        $gymimage->image=$imageName;
    //      }
   
    
     $gymimage->save();
    //       // Gymimage::update(
    //       //   [
            
          //     'title'=>$request->title,
          //     'description'=>$request->description,
          //     'image'=>$imageName,
          //   ]
          //   );
            return redirect()->back()->with('success','update image data insert successfully');
       }
       
        
 }
