@extends('master')
@section('content')
<div class=" product_custom">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  @foreach($products as $item)
  <div class="item {{$item['id']==1?'active':''}}">
      <img class="slider-img" src="{{$item['gallery']}}" alt="...">
      <h3>{{$item['name']}}</h3>
      <p>{{$item['discription']}}</p>
     
    </div>
  @endforeach
  </div>

  <!-- Controls -->
 
  
</div>
  
</div>

@stop