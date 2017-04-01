@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-13 col-sm-13 col-xs-16">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tabel Data<small>Praktek Kerja Lapangan</small></h2>
          <div class="clearfix"></div>
      </div>
          <div class="x_content">
            <table class="table table-bordered">
    <thead>
        <tr> 
          <th> ID </th>
          <th> Nim </th> 
          <th> Semester </th>
          <th> Prodi </th>
          <th> Tahun Ajaran </th>
          <th> Perusahaan </th>
          <th> Aksi </th> 
        </tr>
    </thead>
    <tbody>
    @foreach($pkls as $pkl)
        <tr>
            <td>{{$pkl->id}} </td>
            <td>{{$pkl->nim}}</td>
            <td>{{$pkl->semester}}</td>
            <td>{{$pkl->nama_prodi}}</td>
            <td>{{$pkl->tahun_ajaran}}</td>
            <td>{{$pkl->nama_perusahaan}}</td>
            <td> <a href="/pkl/{{$pkl->id}}/edit" class="btn btn-xs btn-success"><i class="fa fa-pencil-square-o"></i> </a>
            <form class="" action="/pkl/{{$pkl->id}}" name="name" method="post">
            <button name="" class="btn btn-xs btn-warning"> <i class="fa fa-trash"></i> </button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="delete">
                  </form>
                  </td> 
                </tr> 
              @endforeach
            </tbody>
          </table>
        {!! $pkls->links() !!} 
      </div>
    </div>
  </div>
</div>           
@endsection