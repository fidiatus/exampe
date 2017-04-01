@extends('layout.default')

@section('content')
<h1>Edit Data Dosen </h1>

<form class="form-horizontal" action="/perusahaan/{{$perusahaan->id}}"  method="post">
	<div class="form-group">
		<label class="col-md-4">Nama Perusahaan </label>
		<input class="form-control col-md-8" name="nama_perusahaan" value="{{ $perusahaan->nama_perusahaan }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Email </label>
		<input class="form-control col-md-8" name="email" value="{{ $perusahaan->email }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Telp </label>
		<input class="form-control col-md-8" name="telepon" value="{{ $perusahaan->telepon }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Alamat</label>
		<input class="form-control col-md-8" name="alamat" value="{{ $perusahaan->alamat }}">
	</div>
	<br/>
	<input type="hidden" name="_method" value="put">	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection