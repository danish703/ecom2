<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
     <div class="row">
         <div class="col-4">
         <ul class="list-group">
            <li class="list-group-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="list-group-item"><a href="{{route('category')}}">Category</a></li>
            <li class="list-group-item"><a href="{{route('addProduct')}}">Add Product</a></li>
            <li class="list-group-item"><a href="#">Products</a></li>
            <li class="list-group-item"><a href="#">Logout</a></li>
            </ul>
         </div>
         <div class="col-8">
             @yield('body')
         </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>