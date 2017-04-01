@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-16 col-sm-16 col-xs-18">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tabel Data<small>Mahasiswa</small></h2>
          <div class="clearfix"></div>
      </div>
          <div class="x_content">
            <table class="table table-bordered">
              <thead>
                <tr> 
                  <th> ID </th>
                  <th> NIM  </th> 
                  <th> Nama </th>
                  <th> Nama Ayah  </th>
                  <th> Pekerjaan Ayah </th>
                  <th> Jurusan </th>
                  <th> Prodi  </th> 
                  <th> Tanggal Masuk </th>
                  <th> hp </th>
                  <th> Alamat  </th>
                  <th> email </th>
                  <th> Aksi </th> 
                </tr>
              </thead>
            <tbody>
              @foreach ($mahasiswas as $mahasiswa)                        
                <tr>
                  <td>{{$mahasiswa->id}} </td>
                  <td>{{$mahasiswa->username}}</td>
                  <td>{{$mahasiswa->nama}}</td>
                  <td>{{$mahasiswa->nama_ayah}}</td>
                  <td>{{$mahasiswa->pekerjaan_ayah}}</td>
                  <td>{{$mahasiswa->jurusan_sekolah}}</td>
                  <td>{{$mahasiswa->nama_prodi}}</td>
                  <td>{{$mahasiswa->tanggal_masuk}}</td>
                  <td>{{$mahasiswa->hp}}</td>
                  <td>{{$mahasiswa->alamat}}</td>
                  <td>{{$mahasiswa->email}}</td>
                  <td> 
                    <a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-xs btn-success"><i class="fa fa-pencil-square-o"></i> </a>
                      <form class="" action="/mahasiswa/{{$mahasiswa->id}}" name="name" method="post">
                        <button name="" class="btn btn-xs btn-warning"> <i class="fa fa-trash"></i> </button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="delete">
                      </form>
                  </td> 
                </tr> 
              @endforeach
            </tbody>
          </table>
        {!! $mahasiswas->links() !!} 
      </div>
    </div>
  </div>
</div>           
@endsection
          