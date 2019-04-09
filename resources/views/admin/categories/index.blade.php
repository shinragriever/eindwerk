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
					<th scope="col">edit</th>
					<th scope="col">delete</th>

					


				</tr>
				</thead>
				<tbody>	
				@foreach($categories as $category)
				<tr>
				<td><a href="{{route('categories.edit',$category->id)}}">{{$category->id}}</a></td>
				<td>{{$category->name}}</td>
				<td><a href="{{route('categories.edit',$category->id)}}" class="btn btn-outline-primary btn-sm">Edit</a></td>
				<td><form action="{{route('categories.destroy', $category->id)}}" method="POST">
             @method('DELETE')
             @csrf
             <button type="submit" class="btn btn-outline-danger btn-sm">Delete Category</a>
        </form></td>
				</tr>
				@endforeach
			</tbody>
			</table>
		</div>
	</div>

	

 </div>



@endsection