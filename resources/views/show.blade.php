<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Curd</title>
  </head>
  <body>
   
   <a href="contact">Add create</a>

   {{session('msg')}}
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">name</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  
  @foreach($showarr as $s)
    <tr>
     
      <th scope="row"></th>
      <td>{{$s->name}}</td>
      <td>{{$s->title}}</td>
      <td>{{$s->description}}</td>
      <td><a href="data_delete/{{$s->id}}">delete</a><td>
      <td><a href="data_edit/{{$s->id}}">edit</a><td>
    </tr>
    @endforeach
  </tbody>
</table>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

 
  </body>
</html>