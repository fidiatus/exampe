@extends('layout.default')

@section('content')
<h1>Edit Data Prodi </h1>

<form class="form-horizontal" action="/prodi/{{$prodi->id}}"  method="post">
	<div class="form-group">
		<label class="col-md-4">Nama Prodi</label>
		<input class="form-control col-md-8" name="nama_prodi" value="{{ $prodi->nama_prodi }}">
	</div>
	<br/>
	<input type="hidden" name="_method" value="put">	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection