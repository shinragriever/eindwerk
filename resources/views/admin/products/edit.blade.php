@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Edit Product: {{$product->name}}</h1>

            <form method="POST" action="{{Route('products.update', ['product' => $product])}}">
                @method('PUT')
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





          
                    <div>{{ $errors->first('category_id')}}</div>
                </div>
                
             
                    @csrf
                    <button class="btn btn-primary" type="submit">SUBMIT</button>
        </form>
                </div>
            </div>



    </div>
            
        <form action="{{route('products.destroy', $product->id)}}" method="POST">
             @method('DELETE')
             @csrf
             <button type="submit" class="btn btn-danger">Delete product: {{$product->name}}</button>
        </form>
        </div>
    
</div>

@endsection