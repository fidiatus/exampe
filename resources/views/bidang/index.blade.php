@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-13 col-sm-13 col-xs-16">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tabel Data<small>Bidang</small></h2>
          <div class="clearfix"></div>
      </div>
          <div class="x_content">
            <table class="table table-bordered">
    <thead>
        <tr> 
          <th> ID </th>
          <th> Bidang </th>
          <th> Aksi </th> 
        </tr>
    </thead>
    <tbody>
    		@foreach($bidangs as $bidang)
		<tr>
            <td> {{$bidang->id}} </td>
            <td>{{$bidang->bidang}}</td>
            <td> 
            <a href="/bidang/{{$bidang->id}}/edit" class="btn btn-xs btn-success"><i class="fa fa-pencil-square-o"></i> </a>
            <form class="" action="/bidang/{{$bidang->id}}" name="name" method="post">
            <button name="" class="btn btn-xs btn-warning"> <i class="fa fa-trash"></i> </button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="delete">
                      </form>
                  </td> 
                </tr> 
              @endforeach
            </tbody>
          </table>
        {!! $bidangs->links() !!} 
      </div>
    </div>
  </div>
</div>           
@endsection