<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gymimage;
use App\http\Requests\GymimageRequest;
use File;
class GymimageController extends Controller
{
      public function index()
      {
          return view('gymadmin2');
      }

      public function store(GymimageRequest $request, Gymimage $gymimages)
      {
      
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



       public function update(GymimageRequest $req,$id)
       {

        $gymimage=Gymimage::find($id);
       
    
        if ($req->hasfile('image'))
         {
            $filepath='images/'.$gymimage->image;
          
            if(file::exists($filepath))
           {
              file::delete($filepath);
           
          }
        
          $imagepath = $req->file('image');
         $extension=$imagepath->getClientOriginalName();
        
          $imageName = time().'.'.$extension;  
          
         $imagepath->move('images', $imageName);
         
        }
    
           $gymimage->title= $req->input('title');
           $gymimage->description= $req->input('description');
           $gymimage->image=$imageName;
           $gymimage->save();
         
            return redirect()->back()->with('success','image data update successfully');


       }

    
      public function destroy($id)
    {
      $gymimage=Gymimage::find($id);
    
       $filepath='images/'.$gymimage->image;
       
       if(file::exists($filepath))
       {
      
         file::delete($filepath);
        
       }
     
        Gymimage::destroy(array('id',$id));
        return redirect('gym');
    }
    
       
        
 }
