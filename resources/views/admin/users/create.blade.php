@extends('layouts.admin')
@section('content')

    
    <h1>Create User</h1>
    
    <form method="POST" action="{{Route('users.store')}}">

            <label for="name">name:</label>
            <div class="form-group">
                <input type="text" name="name" value="{{ old('name') ?? $user->name}}" class="form-control"> 
                <div>{{ $errors->first('name')}}</div>
            </div>
            <label for="email">email:</label>
            <div class="form-group">
                <input type="text" name="email" value="{{old('email') ?? $user->email}}" class="form-control">
                <div>{{ $errors->first('email')}}</div>
            </div>
            <label for="password">Password:</label>
            <div class="form-group">
            <input type="password" name="password" id="password" class="form-control">
            <div>{{ $errors->first('password')}}</div>
            </div>

            <label for="password-confirm">Confirm Password:</label>
            <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
            </div>
            <div>{{ $errors->first('password_confirmation')}}</div>
            

            <label for="role_id">Role:</label>
            <div class="form-group">
                <select name="role_id" id="role_id" class="form-control">
                    @foreach ($roles as $role)
                    <option value="{{$role->id}}" {{ $role->id == $user->role_id ? 'selected' : ''}}>{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
            
        
        <button class="btn btn-primary" type="submit">SUBMIT</button>
        @csrf
    </form>



@endsection
