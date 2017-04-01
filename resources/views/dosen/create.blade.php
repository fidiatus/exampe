@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-16 col-sm-16 col-xs-18">
    <div class="x_panel">
      <div class="x_title">
<h1>Create Dosen Post</h1>
<div class="clearfix"></div>
      </div>
          <div class="x_content">
<form class="" action="/dosen"  method="post">
	<p> NIP : 
		<input type="text" name="nip" value="" placeholder="nip">
		{{ ($errors->has('nip'))? $errors->first('nip'): ''}} </p>
	<p> Nama : 
		<input type="text" name="nama_dosen" value="" placeholder="nama_dosen">
		{{ ($errors->has('nama_dosen'))? $errors->first('nama_dosen'): ''}} </p>
	<p> Status  :
		<select name="status_id">
		<option> --Pilihan-- </option>
		@foreach($status as $status)
			<option value="{{ $status->id }}"> {{ $status->status }} </option>
		@endforeach
	</select>
		{{ ($errors->has('id_status'))? $errors->first('id_status'): ''}} </p>
	<p> Bidang :
		<select name="bidang_id">
		<option> --Pilihan-- </option>
		@foreach($bidang as $bidang)
			<option value="{{ $bidang->id }}"> {{ $bidang->bidang }} </option>
		@endforeach
	</select>
		{{ ($errors->has('id_bidang'))? $errors->first('id_bidang'): ''}} </p>
	<p> Jenis Kelamin : <input type="radio" name="jenis_kelamin" id="lk" value="lk" checked>Pria
		<input type="radio" name="jenis_kelamin" id="pr" value="pr"> Wanita         
		{{ ($errors->has('jenis_kelamin'))? $errors->first('jenis_kelamin'): ''}} </p>
	<p> tanggal lahir :
		<input type="text" name="tanggal_lahir" value="" placeholder="tanggal_lahir">
		{{ ($errors->has('tanggal_lahir'))? $errors->first('tanggal_lahir'): ''}} </p>
	<p> Alamat : 
		<textarea name="alamat" rows="3" cols="30" placeholder="isi. . ."></textarea>
		{{ ($errors->has('alamat'))? $errors->first('alamat'): ''}} </p>
	<p> No.HP : 
		<input type="text" name="no_hp" value="" placeholder="no_hp">
		{{ ($errors->has('no_hp'))? $errors->first('no_hp'): ''}} </p>
	<p> Username : 
		<input type="text" name="username" value="" placeholder="username">
		{{ ($errors->has('username'))? $errors->first('username'): ''}} </p>
	<p> Email : 
		<input type="text" name="email" value="" placeholder="email">
		{{ ($errors->has('email'))? $errors->first('email'): ''}} </p>
	<p>password : 
		<input type="password" name="password" value="" placeholder="password">
		{{ ($errors->has('password'))? $errors->first('password'): ''}} </p>
	<br/>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection
