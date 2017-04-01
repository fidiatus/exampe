@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-16 col-sm-16 col-xs-18">
    <div class="x_panel">
      <div class="x_title">
<h1>Create Data PKL Post</h1>
<div class="clearfix"></div>
      </div>
          <div class="x_content">
<form class="" action="/pkl"  method="post">
	<p> NIM : 	
	<input type="text" name="nim" value="" placeholder="nim">
	{{ ($errors->has('nim'))? $errors->first('nim'): ''}} </p>
	<p> Semester : 
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
	{{ ($errors->has('semester'))? $errors->first('semester'): ''}} </p>
	<p> Prodi : 
	<select name="id_prodi">
		<option> --- Pilihan--- </option>
		@foreach($prodi as $prodi)
			<option value="{{ $prodi->id }}"> {{ $prodi->nama_prodi }} </option>
		@endforeach
	</select>
	{{ ($errors->has('id_prodi'))? $errors->first('id_prodi'): ''}} </p>
	<p> Tahun Ajaran : 
	<input type="text" name="tahun_ajaran" value="" placeholder="tahun_ajaran">
	{{ ($errors->has('tahun_ajaran'))? $errors->first('tahun_ajaran'): ''}} </p>
	<p> Perusahaan : 
	<select name="perusahaan_id">
		<option> --- Pilihan --- </option>
		@foreach($perusahaan as $perusahaan)
			<option value="{{ $perusahaan->id }}"> {{ $perusahaan->nama_perusahaan }} </option>
		@endforeach
	</select>
	{{ ($errors->has('perusahaan_id'))? $errors->first('perusahaan_id'): ''}} </p>
	<br/>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
</div>
    </div>
  </div>
</div> 
@endsection