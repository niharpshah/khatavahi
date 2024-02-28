<!doctype html>
<html lang="en">
  <head>
    <title>SpendWise | Income</title>
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
      <div class="container mt-4 card p-3 bg-dark">
        <a href="{{route('income.create')}}"><button class="btn btn-outline-primary d-inline-block">Add</button></a>
        <table class="table" style="color: white">
            <thead class="text-center">
                <tr>
                    <th>Company</th>
                    <th>Notes</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($incomes as $income)
                <tr>
                    <td>{{ucwords($income->company)}}</td>
                    <td>
                        @if($income->notes != null)
                            {{ucwords($income->notes)}}
                        @else
                            -
                        @endif
                    </td>
                    <td>${{$income->amount}}</td>
                    <td>{{get_formatted_date($income->date)}}</td>
                    <td>
                        <a href="{{route('income.delete',['id' => $income->income_id])}}"><button class="btn btn-outline-danger">Delete</button></a>
                        <a href="{{route('income.edit',['id' => $income->income_id])}}"><button class="btn btn-outline-primary">Update</button></a>
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