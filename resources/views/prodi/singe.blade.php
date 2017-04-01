@extends('layout.default')

@section('content')
<h1> Data Prodi </h1>

<form class="form-horizontal" action="/bidang/{{$bidang->id}}"  method="post">
	<div class="form-group">
		<label class="col-md-4">ID</label>
		<input class="form-control col-md-8" name="id" value="{{ $bidang->id}}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Nama Prodi</label>
		<input class="form-control col-md-8" name="nama_prodi" value="{{ $bidang->nama_prodi }}">
	</div>
</form>
@endsection