@extends('master')
@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-sm-6">

            <img src="{{$product['gallery']}}" alt="{{$product['name']}}" height="200px">
        </div>
        <div class="col-sm-6">
            <h2> {{$product['name']}}</h2>
            <h3> Price :{{$product['price']}}</h3>
            <h3>Details :{{$product['description']}}</h3>
            <h3>Cataegory :{{$product['category']}}</h3>
            <br><br>
            <form action="{{url('add_to_cart')}}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>
@endsection