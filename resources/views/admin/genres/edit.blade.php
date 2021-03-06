@extends('layouts.admin')
@section('content')

            <h1>Edit category: {{$category->name}}</h1>

            <form method="POST" action="{{Route('categories.update', ['category' => $category])}}">
                @method('PATCH')
                <label for="name">name:</label>
                <div class="form-group">
                    <input type="text" name="name" value="{{ old('name') ?? $category->name}}" class="form-control"> 
                    <div>{{ $errors->first('name')}}</div>
                </div>
                
                    @csrf
                    <button class="btn btn-primary" type="submit">SUBMIT</button>
        </form>
                
            
        <form action="{{route('categories.destroy', $category->id)}}" method="POST">
             @method('DELETE')
             @csrf
             <button type="submit" class="btn btn-danger">Delete category: {{$category->name}}</button>
        </form>


@endsection