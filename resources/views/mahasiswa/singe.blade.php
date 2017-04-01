@extends('layout.default')

@section('content')
<h1> Data Mahasiswa </h1>

<form class="form-horizontal" action="/mahasiswa/{{$mahasiswa->id}}"  method="post">
	<div class="form-group">
		<label class="col-md-4">NIM</label>
		<input class="form-control col-md-8" name="nim" value="{{ $mahasiswa->nim }}">
	</div>
	<div>
	<label class="col-md-4"> Nama</label>
	<input class="form-control col-md-8" name="nama" value="{{ $mahasiswa->nama }}">
	</div>
	<div>
	<label class="col-md-4"> panggilan</label>
	<input class="form-control col-md-8" name="panggilan" value="{{ $mahasiswa->panggilan }}">
	</div>
	<div>
	<label class="col-md-4"> Tempat Lahir</label>
	<input class="form-control col-md-8" name="tempat_lahir" value="{{ $mahasiswa->tempat_lahir }}">
	</div>
	<div>
		<label class="col-md-4">Tanggal Lahir</label>
		<div class="col-md-3">
        <input type="text" name="Tanggal_lahir" value="{{ $mahasiswa->Tanggal_lahir }}" class="form-control has-feedback-left" id="single_cal1" placeholder="First Name" aria-describedby="inputSuccess2Status">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
        </div>
	</div>
	<div>
	<label class="col-md-4"> Golongan darah</label>
	<input class="form-control col-md-8" name="golongan_darah" value="{{ $mahasiswa->golongan_darah }}">
	</div>
	<div>
		<label class="col-md-4">Jenis Kelamin
		<input type="radio" class="form-control col-md-8" name="jenis_kelamin" id="lk" value="lk" checked>Pria
		<input type="radio" name="jenis_kelamink" id="pr" value="pr"> Wanita </label>
	</div>
	<div>
	<label class="col-md-4"> Agama</label>
	<select name="agama" value="{{ $mahasiswa->agama }}">
		<option> ----- Pilih Agama ----- </option>
		<option> Islam </option>
		<option> Kristen </option>
		<option> Budha </option>
		<option> Hindu </option>
		<option> Konghuchu </option>
	</select>
	</div>
	<div>
		<label class="col-md-4">Telepon</label>
		<input class="form-control col-md-8" name="telepon" value="{{ $mahasiswa->telepon }}">
	</div>
	<div>
	<label class="col-md-4"> Hp</label>
	<input class="form-control col-md-8" name="hp" value="{{ $mahasiswa->hp}}">
	</div>
	<div>
	<label class="col-md-4"> Email</label>
	<input class="form-control col-md-8" name="email" value="{{ $mahasiswa->email }}">
	</div>
	<div>
		<label class="col-md-4">Alamat</label>
		<input class="form-control col-md-8" name="alamat" value="{{ $mahasiswa->alamat }}">
	</div>
	<div>
	<label class="col-md-4"> Jumlah_saudara</label>
	<input class="form-control col-md-8" name="jumlah_saudara" value="{{ $mahasiswa->jumlah_saudara}}">
	</div>
	<div>
		<label class="col-md-4">Anak Ke</label>
		<input class="form-control col-md-8" name="anak_ke" value="{{ $mahasiswa->anak_ke }}">
	</div>
	<div>
	<label class="col-md-4"> Daerah Asal</label>
	<input class="form-control col-md-8" name="daerah_asal" value="{{ $mahasiswa->daerah_asal}}">
	</div>
	<div>
		<label class="col-md-4">Sekolah Asal</label>
		<input class="form-control col-md-8" name="sekolah_asal" value="{{ $mahasiswa->sekolah_asal }}">
	</div>
	<div>
	<label class="col-md-4"> Status Sekolah</label>
	<input class="form-control col-md-8" name="status_sekolah" value="{{ $mahasiswa->status_sekolah}}">
	</div>
	<div>
		<label class="col-md-4">Jurusan Sekolah</label>
		<input class="form-control col-md-8" name="jurusan_sekolah" value="{{ $mahasiswa->jurusan_sekolah }}">
	</div>
	<div>
	<label class="col-md-4"> Program Studi Sekolah</label>
	<input class="form-control col-md-8" name="prodi_sekolah" value="{{ $mahasiswa->prodi_sekolah}}">
	</div>
	<div>
		<label class="col-md-4">Nama Ayah</label>
		<input class="form-control col-md-8" name="nama_ayah" value="{{ $mahasiswa->nama_ayah }}">
	</div>
	<div>
	<label class="col-md-4"> Nama Ibu</label>
	<input class="form-control col-md-8" name="nama_ibu" value="{{ $mahasiswa->nama_ibu}}">
	</div>
	<div>
		<label class="col-md-4">Pekerjaan Ayah</label>
		<input class="form-control col-md-8" name="pekerjaan_ayah" value="{{ $mahasiswa->pekerjaan_ayah }}">
	</div>
	<div>
	<label class="col-md-4"> Pekerjaan Ibu</label>
	<input class="form-control col-md-8" name="pekerjaan_ibu" value="{{ $mahasiswa->pekerjaan_ibu}}">
	</div>
	<div>
		<label class="col-md-4">Alamat Ortu</label>
		<input class="form-control col-md-8" name="alamat_ortu" value="{{ $mahasiswa->alamat_ortu }}">
	</div>
	<div>
	<label class="col-md-4"> Jalur Masuk</label>
	<select name="jalur_masuk" value="{{ $mahasiswa->jalur_masuk }}">
		<option> --Pilihan-- </option>
		<option> PMDK </option>
		<option> UMPN </option>
		<option> Seleksi UN </option>
		<option> Bidik Misi </option>
	</select>
	</div>
	<div>
		<label class="col-md-4">Tanggal Masuk</label>
		<div class="col-md-3">
        <input type="text" name="tanggal_masuk" value="{{ $mahasiswa->tanggal_masuk }}" class="form-control has-feedback-left" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	</div>
	</div>
	<div>
	<label class="col-md-4"> Prodi</label>
		@foreach($prodi as $prodi)
			<input value="{{ $prodi->id }}"> {{ $prodi->nama_prodi }} 
		@endforeach
	</div>
	<div>
	<label class="col-md-4"> Username</label>
	<input class="form-control col-md-8" name="username" value="{{ $mahasiswa->username}}">
	</div>
	<div>
		<label class="col-md-4">Aktif</label>
		<input class="form-control col-md-8" name="aktif" value="{{ $mahasiswa->aktif}}"> 
	</div>
</form>
@endsection