@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-16 col-sm-16 col-xs-18">
    <div class="x_panel">
      <div class="x_title">
<h1>Create status Post</h1>
<div class="clearfix"></div>
      </div>
          <div class="x_content">
<form class="" action="/status"  method="post">
	<p> Nama : 
	<input type="text" name="status" value="" placeholder="status">
	{{ ($errors->has('status'))? $errors->first('status'): ''}} </p>	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
</div>
    </div>
  </div>
</div> 
@endsection