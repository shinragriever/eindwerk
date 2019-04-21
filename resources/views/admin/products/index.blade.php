@extends('layouts.admin')

@section('content')


			<table class="table" id="datatable">
				<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">image</th>
					<th scope="col">name</th>
					
					<th scope="col">price</th>
					<th scope="col">category</th>
					<th scope="col">genres</th>
					<th scope="col">edit</th>
					<th scope="col">delete</th>

					


				</tr>
				</thead>
				<tbody>	
				@foreach($products as $product)
				<tr>
					<td><a href="{{route('products.edit',$product->id)}}">{{$product->id}}</a></td>
					<td><img src="{{$product->productImages->first()->thumbnail}}">
					</td>
					<td>{{$product->name}}</td>
					
					<td>{{$product->price}}</td>
					<td>{{$product->category ? $product->category->name : 'Uncategorized'}}</td>
					<td>@foreach($product->genres as $genre)
							<span class="badge badge-info">{{$genre->name}}</span>
						@endforeach
					
					
					</td>
					<td><a href="{{route('products.edit',$product->id)}}" class="btn btn-outline-primary btn-sm">Edit</a></td>
					<td><form action="{{route('products.destroy', $product->id)}}" method="POST">
						@method('DELETE')
						@csrf
						<button type="submit" class="btn btn-outline-danger btn-sm">Delete Product</a>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
			</table>




@endsection


@section('js')
<script>
		$(document).ready( function () {
			$('#datatable').DataTable(
			{
			  'iDisplayLength': -1,
			  "lengthChange": false,  
			  "info": false,  
			  "paging": true,
			  "pageLength": 15,
			  "columnDefs": [{ 
			  "targets": [1,-1,-2], 
			  "orderable": false,
			  }],
			  });
		} );
		</script>
@endsection