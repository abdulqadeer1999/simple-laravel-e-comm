@extends('master')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
     
<table class="table">
    
    <tbody>
      <tr>
        <th scope="row">Amount</th>
        <td> {{$total}} RS</td>
       
      </tr>
      <tr>
        <th scope="row">Tax</th>
        <td> 0 RS</td>
        
      </tr>
      <tr>
        <th scope="row">Delivery</th>
        <td> 150 RS</td>
     
      </tr>
      <tr>
        <th scope="row">Total Amount</th>
        <td> {{$total + 10}} RS </td>
        
      </tr>
    </tbody>
  </table>
  <div>
    <form action="{{url('/orderplace')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputAddress">Address</label>
          <input type="text" class="form-control" name="address" placeholder="Enter your address" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPaymentMethod">Payment Method</label> <br>
          <input type="radio" name="payment" value="cash"><span> Online Payment</span> <br>
          <input type="radio" name="payment" value="cash"><span> Cash On Delivery</span>

        </div>
        
        <button type="submit" class="btn btn-primary">Order Now</button>
      </form>
  </div>
         
</div>
</div>
</div>

@endsection