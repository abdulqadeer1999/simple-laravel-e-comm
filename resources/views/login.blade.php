@extends('master')

@section('title','E-commerce')

@section('content')


  @if( Session::has('msg'))

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Invalid!</strong>  {{ 'msg'}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 mt-5 col-sm-offset-4">
          <h3 style="text-align: center">Login</h3>
            <form action="{{url('login')}}" method="post">
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
               
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div>
</div>

@endsection