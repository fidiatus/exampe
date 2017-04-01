@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-16 col-sm-16 col-xs-18">
    <div class="x_panel">
      <div class="x_title">
<h1>Create Mahasiswa Post</h1>
<div class="clearfix"></div>
      </div>
          <div class="x_content">
<form class="" action="/mahasiswa"  method="post">
	<p> Nama :
	<input type="text" name="nama" value="" placeholder="nama">
	{{ ($errors->has('nama'))? $errors->first('nama'): ''}} </p>
	<p> Panggilan :
	<input type="text" name="panggilan" value="" placeholder="panggilan">
	{{ ($errors->has('panggilan'))? $errors->first('panggilan'): ''}} </p>
	<p> Tempat Lahir : 
	<input type="text" name="tempat_lahir" value="" placeholder="tempat_lahir">
	{{ ($errors->has('tempat_lahir'))? $errors->first('tempat_lahir'): ''}} </p>
	<p> Tanggal Lahir :
	<div class="col-md-3">
        <input type="text" name="tgl_lahir" class="form-control has-feedback-left" id="single_cal1" placeholder="First Name" aria-describedby="inputSuccess2Status">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>     
	{{ ($errors->has('tgl_lahir'))? $errors->first('tgl_lahir'): ''}} </p>
	</div><br><br><br>
	<p> Gol Darah :
	<select name="golongan_darah">
		<option> --Pilihan-- </option>
		<option> A </option>
		<option> B </option>
		<option> AB </option>
		<option> O </option>
	</select>
	<p> Jenis Kelamin : <input type="radio" name="jenis_kelamin" id="lk" value="" checked>Pria
		<input type="radio" name="jenis_kelamin" id="pr" value="pr"> Wanita   
	{{ ($errors->has('jk'))? $errors->first('jk'): ''}} </p>
	<p> Agama :
	<select name="agama">
		<option> --Pilihan-- </option>
		<option> Islam </option>
		<option> Kristen </option>
		<option> Budha </option>
		<option> Hindu </option>
		<option> Konghuchu </option>
	</select>
	{{ ($errors->has('agama'))? $errors->first('agama'): ''}} </p>
	<p> Telepon : 
	<input type="text" name="telepon" value="" placeholder="telepon">
	{{ ($errors->has('telepon'))? $errors->first('telepon'): ''}} </p>
	<p> Hp : 
	<input type="text" name="hp" value="" placeholder="hp">
	{{ ($errors->has('hp'))? $errors->first('hp'): ''}} </p>
	<p> Email : 
	<input type="text" name="email" value="" placeholder="email">
	{{ ($errors->has('email'))? $errors->first('email'): ''}} </p>
	<p> Alamat : 
	<textarea name="alamat" rows="3" cols="30" placeholder="isi. . ."></textarea>
	{{ ($errors->has('alamat'))? $errors->first('alamat'): ''}} </p>
	<p> Jumlah Saudara : 
	<input type="text" name="jumlah_saudara" value="" placeholder="jumlah_saudara">
	{{ ($errors->has('jumlah_saudara'))? $errors->first('jumlah_saudara'): ''}} </p>
	<p> Anak Ke : 
	<input type="text" name="anak_ke" value="" placeholder="anak_ke">
	{{ ($errors->has('anak_ke'))? $errors->first('anak_ke'): ''}} </p>
	<p> Daerah Asal : 
	<input type="text" name="daerah_asal" value="" placeholder="daerah_asal">
	{{ ($errors->has('daerah_asal'))? $errors->first('daerah_asal'): ''}} </p>
	<p> Sekolah_asal : 
	<input type="text" name="sekolah_asal" value="" placeholder="sekolah_asal">
	{{ ($errors->has('sekolah_asal'))? $errors->first('sekolah_asal'): ''}} </p>
	<p> Status Sekolah : 
	<select name="status_sekolah">
		<option> --Pilihan-- </option>
		<option> Negeri </option>
		<option> Swasta </option>
	</select>
	{{ ($errors->has('status_sekolah'))? $errors->first('status_sekolah'): ''}} </p>
	<p> Jurusan sekolah :
	<input type="text" name="jurusan_sekolah" value="" placeholder="jurusan_sekolah">
	{{ ($errors->has('jurusan_sekolah'))? $errors->first('jurusan_sekolah'): ''}} </p>
	<p> Program Studi Sekolah : 
	<input type="text" name="prodi_sekolah" value="" placeholder="prodi_sekolah">
	{{ ($errors->has('prodi_sekolah'))? $errors->first('prodi_sekolah'): ''}} </p>
	<p> Nama Ayah : 
	<input type="text" name="nama_ayah" value="" placeholder="nama_ayah">
	{{ ($errors->has('nama_ayah'))? $errors->first('nama_ayah'): ''}} </p>
	<p> Nama Ibu : 
	<input type="text" name="nama_ibu" value="" placeholder="nama_ibu">
	{{ ($errors->has('nama_ibu'))? $errors->first('nama_ibu'): ''}} </p>
	<p> Pekerjaan Ayah : 
	<input type="text" name="pekerjaan_ayah" value="" placeholder="pekerjaan_ayah">
	{{ ($errors->has('pekerjaan_ayah'))? $errors->first('pekerjaan_ayah'): ''}} </p>
	<p> pekerjaan Ibu : 
	<input type="text" name="pekerjaan_ibu" value="" placeholder="pekerjaan_ibu">
	{{ ($errors->has('pekerjaan_ibu'))? $errors->first('pekerjaan_ibu'): ''}} </p>
	<p> Alamat Orang Tua : 
	<textarea name="alamat_ortu" rows="3" cols="30" placeholder="isi. . ."></textarea>
	{{ ($errors->has('alamat_ortu'))? $errors->first('alamat_ortu'): ''}} </p>
	<p> Jalur Masuk : 
	<select name="jalur_masuk">
		<option> --Pilihan-- </option>
		<option> PMDK </option>
		<option> UMPN </option>
		<option> Seleksi UN </option>
		<option> Bidik Misi </option>
	</select>
	{{ ($errors->has('jalur_masuk'))? $errors->first('jalur_masuk'): ''}} </p>
	<p> Tanggal Masuk :
	<div class="col-md-3">
        <input type="text" name="tanggal_masuk" class="form-control has-feedback-left" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
        {{ ($errors->has('tanggal_masuk'))? $errors->first('tanggal_masuk'): ''}} </p>
	</div><br><br><br>
	<p> Prodi :
	<select name="prodi">
		<option> ----- Pilih Prodi ----- </option>
		@foreach($prodi as $prodi)
			<option value="{{ $prodi->id }}"> {{ $prodi->nama_prodi }} </option>
		@endforeach
	</select>
	{{ ($errors->has('prodi'))? $errors->first('prodi'): ''}} </p>
	<p> Username :
	<input type="text" name="username" value="" placeholder="NIM">
	{{ ($errors->has('username'))? $errors->first('username'): ''}} </p>
	<p> Password :
	<input type="password" name="password" value="" placeholder="password">
	{{ ($errors->has('password'))? $errors->first('password'): ''}} </p>
	<p> Aktif :
	<select name="aktif">
		<option> --Pilihan-- </option>
		<option> Aktif</option>
		<option> Tidak Aktif </option>
	</select>
	{{ ($errors->has('aktif'))? $errors->first('aktif'): ''}} </p>
	</div>
	<br/>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
</div>
    </div>
  </div>
</div> 
@endsection