@extends('master')
@section('content');

<div class="container">
   
    <h3 style="text-align: center; margin-top:10px;">My Orders</h3>

    <div class="row my-5">
        @foreach ($orders as $item )

        <div class="col-md-3">
            <div class="searched-item">
                <a href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" alt="{{$item->name}}" height="200px">
                </a>
                <h2> {{$item->name}}</h2>
                <h5>Delivery Status : {{$item->status}}</h5>
                <h5>Address : {{$item->address}}</h5>
                <h5>Payment Status : {{$item->payment_status}}</h5>
                <h5>Payment Method : {{$item->payment_method}}</h5>
                <hr> 

                </div>

        </div>
        
        @endforeach
    </div>
  

</div>


@endsection