@extends('layout.default')

 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Permission Role</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-success" href="{{ route('permissionrole.create') }}"> Create Permission Role</a>
	        </div>
	    </div>
	</div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Pemission</th>
			<th>Roles</th>
			<th width="280px">Action</th>
		</tr>
	 
	@foreach ($permissionroles as $key => $permissionrole)
	<tr>
		<td>{{ ++$i }}</td>
		<td>
			{{ $permissionrole->permission_id }}
			<!-- @if(!empty($permissionrole->permissions))
				@foreach($permissionrole->permissions as $v)
					<label class="label label-success">{{ $v->display_name }}</label>
				@endforeach
			@endif -->
		</td>
		<td>
			{{ $permissionrole->role_id }}
			<!-- @if(!empty($permissionrole->roles))
				@foreach($permissionrole->roles as $v)
					<label class="label label-success">{{ $v->display_name }}</label>
				@endforeach
			@endif -->
		</td>
		<td>
			<a class="btn btn-info" href="{{ route('permissionrole.show',[$permissionrole->permission_id, $permissionrole->role_id]) }}">Show</a>
			<a class="btn btn-primary" href="{{ route('permissionrole.edit',[$permissionrole->permission_id, $permissionrole->role_id]) }}">Edit</a>
			{!! Form::open(['method' => 'DELETE','route' => ['permissionrole.destroy', $permissionrole->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
	</table>
	{!! $permissionroles->render() !!}
@endsection