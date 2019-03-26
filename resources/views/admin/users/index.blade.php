@extends('layouts.admin')

@section('content')

 <div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<table class="table" id="datatable">
				<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">name</th>
					<th scope="col">role</th>
					<th scope="col">email</th>
					<th scope="col">edit</th>
					<th scope>delete</th>


				</tr>
				</thead>
				<tbody>	
				@foreach($users as $user)
				<tr>
				<td><a href="{{route('users.edit',$user->id)}}">{{$user->id}}</a></td>
				<td>{{$user->name}}</td>
				<td>{{$user->role ? $user->role->name : 'User without role'}}</td>
				<td>{{$user->email}}</td>
				<td><a href="{{route('users.edit',$user->id)}}" class="btn btn-outline-primary btn-sm">Edit</a></td>
				<td><form action="{{route('users.destroy', $user->id)}}" method="POST">
             @method('DELETE')
             @csrf
             <button type="submit" class="btn btn-outline-danger btn-sm">Delete User</a>
        </form></td>
				</tr>
				@endforeach
			</tbody>
			</table>
		</div>
	</div>

	

 </div>



@endsection