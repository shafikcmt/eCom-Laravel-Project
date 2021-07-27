@extends('master')
@section('content')
<div class="product_search">
<h3 class="well">CartList Item</h3>
            @foreach($products as $item)
        <div class="row divider">
        
            <div class="col-md-3 col-md-offset-2">
            
            <img class="img-responsive" style="height:150px;width: 150px;" src="{{$item->gallery}}" >
           
            
            </div>
            <div class="col-md-3">
            
          
            <h2>{{$item->name}}</h2>
            <h4>{{$item->discription}}</h4>
            
            </div>
            <div class="col-md-2">
           
           <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
            
        </div>   
</div>   
     
@endforeach
</div> 
@endsection