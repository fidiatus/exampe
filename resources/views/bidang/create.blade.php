@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-16 col-sm-16 col-xs-18">
    <div class="x_panel">
      <div class="x_title">
<h1>Create Bidang Post</h1>
<div class="clearfix"></div>
      </div>
          <div class="x_content">
<form class="" action="/bidang"  method="post">
	<p> Nama : 
	<input type="text" name="bidang" value="" placeholder="bidang">
	{{ ($errors->has('bidang'))? $errors->first('bidang'): ''}} </p>	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection