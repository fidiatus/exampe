@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-13 col-sm-13 col-xs-16">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tabel Data<small>Perusahaan</small></h2>
          <div class="clearfix"></div>
      </div>
          <div class="x_content">
            <table class="table table-bordered">
    <thead>
        <tr> 
          <th> ID </th>
          <th> Nama Perusahaan </th> 
          <th> Email </th>
          <th> Telp </th>
          <th> Alamat </th>
          <th> Aksi </th> 
        </tr>
    </thead>
    <tbody>
        @foreach($perusahaans as $perusahaan)
        <tr>
            <td> {{$perusahaan->id}} </td>
            <td>{{$perusahaan->nama_perusahaan}}</td>
            <td>{{$perusahaan->email}}</td>
            <td>{{$perusahaan->telepon}}</td>
            <td>{{$perusahaan->alamat}}</td>
            <td> <a href="/perusahaan/{{$perusahaan->id}}/edit" class="btn btn-xs btn-success"><i class="fa fa-pencil-square-o"></i> </a>
                      <form class="" action="/perusahaan/{{$perusahaan->id}}" name="name" method="post">
                        <button name="" class="btn btn-xs btn-warning"> <i class="fa fa-trash"></i> </button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="delete">
                      </form>
                  </td> 
                </tr> 
              @endforeach
            </tbody>
          </table>
        {!! $perusahaans->links() !!} 
      </div>
    </div>
  </div>
</div>           
@endsection  