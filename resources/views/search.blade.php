@extends('master')
@section('content')
<div class="product_search">
    <div class="row">
        <div class="col-md-2 col-md-offset-2 pull-left">
            <a href="#" ><h3 class="well">Filter</h3></a>
        </div>
        <div class="col-md-6">
                    <h3 class="well">Result for products</h3>
                    @foreach($products as $item)
                    <div class="search-item">
                    <a href="detail/{{$item['id']}}">
                    <img class="img-responsive" style="height:150px;width: 150px;" src="{{$item['gallery']}}">
                    <h2>{{$item['name']}}</h2>
                    <h4>{{$item['discription']}}</h4>
                    </a>
                    </div>
        </div>   
    </div>      
@endforeach
</div> 
@endsection