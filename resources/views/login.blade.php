@extends('master')
@section('content')
<div class="container">
    <div class="row">
    
    <div class="panel panel-default">
    <div class="panel-heading">
    <h3>User Login</h3>
    </div>
  <div class="panel-body">
  <div class="col-md-6 col-md-offset-3">
    <form action="" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
    </div>
  </div>
  <div class="panel-footer">
      <h2>Ecom Laravel Project</h2>
  </div>
</div>
  
    </div>
</div>
@stop