@extends('index')
@section('title', 'priceadmin')
@section('content')

   <div class="container mt-4">
   
   <div class="jumbotron jumbotron-fluid">
   @if($message=Session::get('success'))
   <div class="alert alert-success alert-block">
   <strong>{{$message}}</strong>
   </div>
   @endif
  <form action="{{url('save')}}" method="post" enctype="multipart/form-data" >
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">image title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Entet image title">
    <span class="text-danger">{{$errors->first('title')}}</span>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">image description</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" placeholder="enter image description">
    <span class="text-danger">{{$errors->first('description')}}</span>
  </div>
  <div class="form-group">
        <label for="image">image</label>
        <input type="file" class=" " name="image" id="image" >
        <span class="text-danger">{{$errors->first('image')}}</span>
        </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>

   
   
   </div>
   @endsection