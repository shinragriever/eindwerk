@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Create category</h1>

            <form method="POST" action="{{Route('categories.store')}}">

                <label for="name">name:</label>
                <div class="form-group">
                    <input type="text" name="name" value="{{ old('name') ?? $category->name}}" class="form-control"> 
                    <div>{{ $errors->first('name')}}</div>
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
