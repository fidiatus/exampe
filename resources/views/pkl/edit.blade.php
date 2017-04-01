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
		<select name="semester">
		<option> --- Pilihan --- </option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		</select>
	</div>
	<div class="form-group">
		<label class="col-md-4"> Prodi </label>
		<select name="id_prodi">
		<option> --- Pilihan--- </option>
		@foreach($prodi as $prodi)
			<option value="{{ $prodi->id }}"> {{ $prodi->nama_prodi }} </option>
		@endforeach
	</select>
	</div>
	<div class="form-group">
		<label class="col-md-4">Tahun Ajaran</label>
		<input class="form-control col-md-8" name="tahun_ajaran" value="{{ $pkl->tahun_ajaran }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Perusahaan</label>
		<select name="perusahaan_id">
		<option> --- Pilihan --- </option>
		@foreach($perusahaan as $perusahaan)
			<option value="{{ $perusahaan->id }}"> {{ $perusahaan->nama_perusahaan }} </option>
		@endforeach
	</select>
	{{ ($errors->has('perusahaan_id'))? $errors->first('perusahaan_id'): ''}} </p>
	</div>
	<br/>
	<input type="hidden" name="_method" value="put">	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection