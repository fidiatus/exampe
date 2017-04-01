@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-13 col-sm-13 col-xs-16">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tabel Data<small>Dosen</small></h2>
          <div class="clearfix"></div>
      </div>
          <div class="x_content">
            <table class="table table-bordered">
    <thead>
        <tr> 
          <th> ID </th> 
          <th> NIP  </th> 
          <th> Nama </th>
          <th> Status </th>
          <th> Bidang  </th>
          <th> Jk </th>
          <th> Tgl Lahir  </th>
          <th> Alamat </th>
          <th> Hp </th>
          <th> Username </th>
          <th> Email </th> 
          <th> Aksi </th> 
        </tr>
    </thead>
    <tbody>
@foreach ($dosens as $dosen)  
        <tr>
            <td>{{$dosen->id}}</td>
            <td><a href="/dosen/{{$dosen->id}}">{{$dosen->nip}}</a></td>
            <td>{{$dosen->nama_dosen}}</td>
            <td>{{$dosen->status}}</td>
            <td>{{$dosen->bidang}}</td>
            <td>{{$dosen->jenis_kelamin}}</td>
            <td>{{$dosen->tanggal_lahir}}</td>
            <td>{{$dosen->alamat}}</td>
            <td>{{$dosen->no_hp}}</td>
            <td>{{$dosen->username}}</td>
            <td>{{$dosen->email}}</td>
            <td> <a href="/dosen/{{$dosen->nip}}/edit" class="btn btn-xs btn-success"><i class="fa fa-pencil-square-o"></i> </a>
              <form class="" action="/dosen/{{$dosen->nip}}" name="name" method="post">
              <button name="" class="btn btn-xs btn-warning"> <i class="fa fa-trash"></i> </button>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="delete">
                    </form>
                  </td> 
                </tr> 
              @endforeach
            </tbody>
          </table>
        {!! $dosens->links() !!} 
      </div>
    </div>
  </div>
</div>           
@endsection
          