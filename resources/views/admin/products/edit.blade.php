@extends('layouts.admin')
@section('content')

<h1>Edit Product: {{$product->name}}</h1>

<form method="POST" action="{{Route('products.update', ['product' => $product])}}">
    @method('PUT')
    <div class="row">
        <div class="col-md-7">
            <h3>Product Info</h3>
            <label for="name">Name:</label>
            <div class="form-group">
                <input type="text" name="name" value="{{ old('name') ?? $product->name}}" class="form-control"> 
                <div>{{ $errors->first('name')}}</div>
            </div>
            <label for="description">Description:</label>
            <div class="form-group">
                <textarea name="description"  cols="30" rows="10" class="form-control">{{ old('description') ?? $product->description}}</textarea>
            </div>
            <div>{{ $errors->first('description')}}</div>
            <label for="price">Price:</label>
            <div class="form-group">
                <input type="text" name="price" value="{{ old('price') ?? $product->price}}" class="form-control"> 
                <div>{{ $errors->first('price')}}</div>
            </div>

            <div class="form-group">
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{ $category->id == $product->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
        </div>
        <div class="col-mod-5">
            <div>
                <h3>Product Images</h3>
                <table>
                    
                @foreach($files as $file)
                <tr>
                    <td><img src="{{asset($file->thumbnail)}}"><td>
                    <td>{{$file->order_column}}</td>
                    <td>{{$file->featured}}</td>
                    <td>
                        @if($file->featured)
                        <a class="btn btn-primary" href="#">Primary Image</a>
                        @elseif(!$file->featured)
                        <a href="{{$file->featured}}" class="btn btn-secondary">Make Primary</a>
                        @endif
                    </td>
                    <td><a href="" class="btn btn-primary">Delete</a></td>
                </tr>
                @endforeach
                </table>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div>{{ $errors->first('category_id')}}</div>
            @csrf
            <div class="form-group">
                <button class="btn btn-primary" type="submit">SUBMIT</button>
            </div>
        </div>
    </div>
</form>
        
    




    
<form action="{{route('products.destroy', $product->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <div class="form-group">
        <button type="submit" class="btn btn-danger">Delete product: {{$product->name}}</button>
        </div>
</form>


@endsection