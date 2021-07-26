@extends('master')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6" style="padding:20px;">
        <img style="height:250px;" class="img-responsive img-thumbnail" src="{{$product['gallery']}}" alt="">
    </div>
    <div class="col-md-6">
        <a href="/">Go Back</a>
        <h2>{{$product['name']}}</h2>
        <h3>price : {{$product['price']}}</h3>
        <h4>Details : {{$product['discription']}}</h4>
        <p>Category : {{$product['category']}}</p>
        <br><br>
        <div class="row">
            <div class="col-md-6">
               <button class="btn btn-primary">Add to Cart</button>
            </div>
            <div class="col-md-6">
            <button class="btn btn-success">Buy Now</button>
            </div>
        </div>
    </div>
</div>
</div>
@endsection