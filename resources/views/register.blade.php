@extends('master')

@section('title','E-commerce')

@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 mt-5 col-sm-offset-4">
          <h3 style="text-align: center">Register</h3>

            <form action="{{url('register')}}" method="post">
              @csrf

              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
               
                <button type="submit" class="btn btn-primary">Register</button>
              </form>
        </div>
    </div>
</div>

@endsection