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
    <li><a href="showrelation">HOME</a></li>  
   <div class="container">
   
   <div class="jumbotron jumbotron-fluid">
   @if($message=Session::get('success'))
   <div class="alert alert-success alert-block">
   <strong>{{$message}}</strong>
   </div>
   @endif
  <form action="{{url('savecategory')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">category name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter category">
    <span class="tetx-danger">{{$errors->first('name')}}</span>
  </div>
  <div class="form-group">
    <label for="category type">category type</label>
    <input type="text" class="form-control" id="type" name="type" aria-describedby="emailHelp" placeholder="category">
    <span class="tetx-danger">{{$errors->first('type')}}</span>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>

   
   
   </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>