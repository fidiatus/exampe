@extends('layout.default')

@section('content')
<h1>Edit Data PKL </h1>

<form class="form-horizontal" action="/pkl/{{$pkl->id}}"  method="post">
	<div class="form-group">
		<label class="col-md-4">NIM</label>
		<input class="form-control col-md-8" name="nim" value="{{ $pkl->nim }}">
	{{ ($errors->has('nim'))? $errors->first('nim'): ''}} </p>
	</div>
	<div class="form-group">
		<label class="col-md-4">Semester</label>		
		<input class="form-control col-md-8" name="semester" value="{{ $pkl->semester }}">
	</div>
	<div class="form-group">
		<label class="col-md-4" name="id_prodi"> Prodi </label>
		@foreach($prodi as $prodi)		
		<input class="form-control col-md-8" name="{{ $prodi->id }}" value="{{ $prodi->nama_prodi }}">
		@endforeach
	</div>
	<div class="form-group">
		<label class="col-md-4">Tahun Ajaran</label>
		<input class="form-control col-md-8" name="tahun_ajaran" value="{{ $pkl->tahun_ajaran }}">
	</div>
	<div class="form-group">
		<label class="col-md-4" name="perusahaan_id">Perusahaan</label>	
		@foreach	
		<input class="form-control col-md-8" name="Perusahaan_id" value="{{ $perusahaan->nama_perusahaan }}">
		@endforeach
	</div>
</form>
@endsection