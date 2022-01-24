<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
$total = ProductController::cartItem();
}
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">E-Comm</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/myorders')}}">Orders</a>
        </li>
        @if(Session::has('user'))
        {{-- <li class="nav-item mr-auto">
            <a class="nav-link" href="{{url('/cartlist')}}">
              ({{$total}})</a>             

         </li> --}}

         <li class="nav-item">
          <a class="nav-link" href="#">{{Session::get('user')['name']}}</a>
       </li>

         <li class="nav-item">
          <a class="nav-link" href="{{url('/logout')}}">Logout</a>
         


       </li>
       @else
       <li class="nav-item">
        <a class="nav-link" href="{{url('/login')}}">Login</a>

     </li>
    
     <li class="nav-item">
      <a class="nav-link" href="{{url('/register')}}">Register</a>
   </li>
  
     @endif
     @if(Session::has('user'))
     <li class="nav-item my-2 ">
     <a href="{{url('/cartlist')}}" <i class="fa fa-shopping-cart" aria-hidden="true">{{$total}}</i></a>
  
   </li>
   @endif
    
      </ul>
      <form class="form-inline my-2 my-lg-0">
        
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    
    </div>
  </nav>