@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-16 col-sm-16 col-xs-18">
    <div class="x_panel">
      <div class="x_title">
<h1>Create Perusahaan Post</h1>
<div class="clearfix"></div>
      </div>
          <div class="x_content">
<form class="" action="/perusahaan"  method="post">
	<p> Nama Perusahaan :
	<input type="text" name="nama_perusahaan" value="" placeholder="nama_perusahaan">
	{{ ($errors->has('nama_perusahaan'))? $errors->first('nama_perusahaan'): ''}} </p>
	<p> Email :
	<input type="text" name="email" value="" placeholder="email">
	{{ ($errors->has('email'))? $errors->first('email'): ''}} </p>
	<p> No.Telp : 
	<input type="text" name="telepon" value="" placeholder="telepon">
	{{ ($errors->has('telepon'))? $errors->first('telepon'): ''}}</p>
	<p> Alamat : 
	<textarea name="alamat" rows="3" cols="30" placeholder="isi. . ."></textarea>
	{{ ($errors->has('alamat'))? $errors->first('alamat'): ''}} </p>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
</div>
    </div>
  </div>
</div> 
@endsection