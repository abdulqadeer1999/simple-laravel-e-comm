@extends('master')
@section('content');

<div class="container">
   
    <h3 style="text-align: center; margin-top:10px;">Your Cart Products</h3>
    <a class="btn btn-success" href="ordernow">Order Now</a>

    <div class="row my-5">
        @foreach ($products as $item )

        <div class="col-md-3">
            <div class="searched-item">
                <a href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" alt="{{$item->name}}" height="200px">
                </a>
                <h2>{{$item->name}}</h2>
                <h5>{{$item->description}}</h5>
                </div>
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove Cart</a>

        </div>
        
        @endforeach
    </div>
  

</div>


@endsection