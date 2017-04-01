@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-16 col-sm-16 col-xs-18">
    <div class="x_panel">
      <div class="x_title">
<h1>Create prodi Post</h1>
<div class="clearfix"></div>
      </div>
          <div class="x_content">
<form class="" action="/prodi"  method="post">
	<p> Nama : 
	<input type="text" name="nama_prodi" value="" placeholder="nama_prodi">
	{{ ($errors->has('nama_prodi'))? $errors->first('nama_prodi'): ''}} </p>	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
</div>
    </div>
  </div>
</div> 
@endsection