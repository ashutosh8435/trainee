<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>category</title>
  </head>
  <body>
    <h1>category</h1>

   <div class="container">
   
   <div class="jumbotron jumbotron-fluid">
   @if($message=Session::get('success'))
   <div class="alert alert-success alert-block">
   <strong>{{$message}}</strong>
   </div>
   @endif
  <form action="../update/{{$gymimage->id}}" method="post"  >
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">image title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Entet image title" value="{{$gymimage->title}}">
    <span class="tetx-danger">{{$errors->first('title')}}</span>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">image description</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" placeholder="enter image description" value="{{$gymimage->description}}">
    <span class="tetx-danger">{{$errors->first('description')}}</span>
  </div>
  <div class="form-group">
        <label for="image">image</label>
        <input type="file" class=" " name="image" id="image" value="{{$gymimage->image}}" >
        <span class="tetx-danger">{{$errors->first('image')}}</span>
        </div>
  <button type="submit" class="btn btn-primary">update</button>
</form>
  </div>

   
   
   </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>