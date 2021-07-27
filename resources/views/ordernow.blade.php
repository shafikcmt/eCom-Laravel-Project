@extends('master')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <table class="table">
 
  <tbody>
    <tr>
    
      <td>Price</td>
      <td>{{$total}} TK</td>
     
    </tr>
    <tr>
   
      <td>Tax</td>
      <td>0 TK</td>
     
    </tr>
    <tr>
 
      <td>Delevery</td>
      <td>100 TK</td>
     
    </tr>
    <tr>
 
 <td>Total Amount</td>
 <td>{{$total+100}}</td>

</tr>
  </tbody>
</table>
<form  action="orderplace" method="POST">
  @csrf
  <div class="form-group">
  <label for="">Address</label>
    <textarea placeholder="enter your address" class="form-control" name="address"></textarea>
  </div>
  <div class="form-group">
    <label for="">Payment Method</label>
    <p>
    <input type="radio" value="cash" name="payment" id="pwd"><span> Online Payment</span>

    </p>
    <p>
    <input type="radio" value="cash" name="payment" id="pwd"><span> Bkash Payment</span>

    </p>
    <p>
    <input type="radio" value="cash" name="payment" id="pwd"><span> Payment on Delevery</span>

    </p>
  </div>
  <button type="submit" class="btn btn-default">Order Now</button><br><br>
</form>
    </div>
</div>
</div> 
@endsection