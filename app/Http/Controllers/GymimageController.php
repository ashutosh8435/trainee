<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gymimage;
class GymimageController extends Controller
{
      public function index()
      {
          return view('gymadmin2');
      }

      public function store(Request $request)
      {
           $res= new gymimage();
          $res->title=$request->input('title');
          $res->description=$request->input('description');
         
          if( $request->hasfile('image')){ 
            $image = $request->file('image'); 
            $fileName = $image->getClientOriginalName();
            $fileExtension = $image->getClientOriginalExtension();
            dd($fileExtension); 
        } 
  
          //if($request->has('image'))
          //{
                // $image=$request->file('image');
                // $reimage=time().'.'.$image->getClinetOriginalExtension();
                // $dest=public_path('/images1');
                // $image->move($dest,$reimage);
             // $file=$request->file('image');
            
            //   $extension=$file->getClinetOriginalExtension();
            //   $filename=time() . '.' . $extension;
            //   $file->move('images2',$filename);
            //   $res->image=$filename;
         // }
          else{
              return $request;
             $res->image='';
          }
          $res->save();
          return view('gymadmin2')->with('res',$gymimage);
        }
 }
