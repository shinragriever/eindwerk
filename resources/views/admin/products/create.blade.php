@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Create Product</h1>

            <form method="POST" action="{{Route('products.store')}}">

                <label for="name">Name:</label>
                <div class="form-group">
                    <input type="text" name="name" value="{{ old('name') ?? $product->name}}" class="form-control"> 
                    <div>{{ $errors->first('name')}}</div>
                </div>
                <label for="description">Description:</label>
                <div class="form-group">
                    <textarea name="description" value="{{ old('description') ?? $product->description}}" cols="30" rows="10" class="form-control">{{ old('description') ?? $product->description}}</textarea>
                </div>
                <label for="price">Price:</label>
                <div class="form-group">
                    <input type="text" name="price" value="{{ old('price') ?? $product->price}}" class="form-control"> 
                    <div>{{ $errors->first('price')}}</div>
                </div>
                <label for="category_id">Category:</label>
                <div class="form-group">
                    <select class="custom-select my-1 mr-sm-2" name="category_id">
                        <option value="0" selected disabled>Choose Category</option>
                        @foreach($categories as $category)
                        
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <div>{{ $errors->first('category_id')}}</div>
                </div>
                
                @csrf
            </div>
        </div>




        <button class="btn btn-primary" type="submit">SUBMIT</button>
        
    </form>


</div>
</div>
</div>
@endsection
