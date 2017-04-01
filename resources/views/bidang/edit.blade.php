@extends('layout.default')

@section('content')

<h1>Edit Data bidang </h1>

<form class="form-horizontal" action="/bidang/{{$bidang->id}}"  method="post">
	<div class="form-group">
		<label class="col-md-4">Bidang</label>
		<input class="form-control col-md-8" name="bidang" value="{{ $bidang->bidang }}">
	</div>
	<br/>
	<input type="hidden" name="_method" value="put">	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection