<!doctype html>
<html lang="en">
  <head>
    <title>SpendWise | Category</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
 </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="color: white">
      <a class="navbar-brand" href="{{url('/')}}">SpendWise</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('category')}}">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('income')}}">Income</a>
          </li>
        </ul>
      </div>
    </nav>
      <div class="container mt-4 card p-3 bg-light">
          <a href="{{route('category.create')}}"><button class="btn btn-outline-primary d-inline-block" style="margin: 20px;">Add</button></a>
          <table class="table table-active">
            <thead class="text-center">
                <tr>
                    <th>Category Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($category as $cat)
                <tr>
                    <td>{{ucwords($cat->cat_name)}}</td>
                    <td>{{get_formatted_date($cat->date);}}</td>
                    <td>{{date('H : i : s',strtotime($cat->time));}}</td>
                    <td>
                      <a href="{{route('category.delete',['id' => $cat->cat_id])}}"><button class="btn btn-outline-danger">Delete</button></a>
                      <a href="{{route('category.edit',['id' => $cat->cat_id])}}"><button class="btn btn-outline-primary">Update</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>