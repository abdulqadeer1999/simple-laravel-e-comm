@extends('master')
@section('content')
<div class=" custom-product">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            @foreach ($products as $item )
                
          
          <div class="carousel-item {{$item ['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
              <img class="d-block w-100" src="{{$item['gallery']}}" alt="{{$item['name']}}" width="400px" height="400px">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="color: greenyellow">{{$item['name']}}</h5>
                <p style="color: greenyellow">{{$item['description']}}</p>
              </div>
            </a>
          </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      
     <h3 style="text-align: center;margin-top:40px;">Trending Products</h3>

    
           
     @foreach ($products as $item )

     <a href="detail/{{$item['id']}}">

     <div class="trending-item">
       
     <img class="" src="{{$item['gallery']}}" alt="{{$item['name']}}"  height="200px">
     
        <h5  >{{$item['name']}}</h5>
    </div>
     </a>

      @endforeach

     
</div>


@endsection