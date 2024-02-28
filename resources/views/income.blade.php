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
      <form action="{{$url}}" method="post">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
          <h3 class="text-center text-primary">{{$title}}</h3>
          <div class="row" style="margin: 10px">
            <div class="form-group col-md-6 required">
              <div class="form-group">
                <label for="company">Company</label>
                <input type="text"
                  class="form-control" name="company" id="company" placeholder="Company" value="{{$incomes?->company}}">
                <span class="form-text text-danger">
                  @error('company')
                    {{$message}}
                  @enderror
                </span>
              </div>
            </div>
            <div class="form-group col-md-6 required">
              <div class="form-group">
                <label for="notes">Notes</label>
                <input type="text"
                  class="form-control" name="notes" id="notes" placeholder="Notes" value="{{$incomes?->notes}}">
                {{-- <span class="form-text text-danger">Help text</span> --}}
              </div>
            </div>
            <div class="form-group col-md-6 required">
              <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text"
                  class="form-control" name="amount" id="amount" placeholder="Amount" value="{{$incomes?->amount}}">
                <span class="form-text text-danger">
                  @error('amount')
                    {{$message}}
                  @enderror
                </span>
              </div>
            </div>
            <div class="form-group col-md-6 required">
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date" id="date" value="{{$incomes?->date}}">
                <span class="form-text text-danger">
                  @error('date')
                    {{$message}}
                  @enderror
                </span>
              </div>
            </div>
            <button type="submit" class="btn btn-outline-primary btn-lg btn-block" style="margin-top: 15px; padding-top: 15px;">Submit</button>
          </div>
        </div>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>