@extends('layout.default')

@section('content')
<h1>Edit Data Dosen </h1>

<form class="form-horizontal" action="/dosen/{{$dosen->id}}"  method="post">
	<div class="form-group">
		<label class="col-md-4">NIP</label>
		<input class="form-control col-md-8" name="nip" value="{{ $dosen->nip }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Nama</label>
		<input class="form-control col-md-8" name="nama_dosen" value="{{ $dosen->nama_dosen }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Status</label>
		<select name="status">
		<option> --Pilihan-- </option>
		@foreach($status as $status)
			<option value="{{ $status->id }}"> {{ $status->status }} </option>
		@endforeach
	</select>
	</div>
	<div class="form-group">
		<label class="col-md-4">Bidang</label>
		<select name="bidang">
		<option> --Pilihan-- </option>
		@foreach($bidang as $bidang)
			<option value="{{ $bidang->id }}"> {{ $bidang->bidang }} </option>
		@endforeach
	</select>
	</div>
	<div class="form-group">
		<label class="col-md-4">Jenis kelamin</label>
		<input type="radio" name="jenis_kelamin" id="lk" value="lk" checked>Pria
		<input type="radio" name="jenis_kelamin" id="pr" value="pr"> Wanita 
	</div>
	<div class="form-group">
		<label class="col-md-4">Tanggal Lahir</label>
		<div class="col-md-3">
        <input type="text" name="Tanggal_lahir" value="{{ $dosen->Tanggal_lahir }}" class="form-control has-feedback-left" id="single_cal1" placeholder="First Name" aria-describedby="inputSuccess2Status">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
        </div>
	</div>
	<div class="form-group">
		<label class="col-md-4">Alamat</label>
		<input class="form-control col-md-8" name="alamat" value="{{ $dosen->alamat }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">No.HP</label>
		<input class="form-control col-md-8" name="no_hp" value="{{ $dosen->no_hp}}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Username</label>
		<input class="form-control col-md-8" name="username" value="{{ $dosen->username }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Email</label>
		<input class="form-control col-md-8" name="email" value="{{ $dosen->email }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Password</label>
		<input class="form-control col-md-8" name="password" value="{{ $dosen->password }}">
	</div>
	<br/>
	<input type="hidden" name="_method" value="put">	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection