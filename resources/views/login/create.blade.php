@extends('layouts.master')

@section('title')
    Login
@endsection

@section('content')
    

    <form method="POST" action='/login'>
    <h2>Please login</h2>
    {{ csrf_field() }}
        

        <div class="form-group">

            <label for="email">Email</label>
            <input id = "email" type= "text" name="email" class= "form-control">
            @include('partials.error-message', ['fieldTitle' => 'email'])
        </div>
        
        <div class="form-group">

            <label for="password">Password</label>
            <input id = "password" type= "password" name="password" class= "form-control">
            @include('partials.error-message', ['fieldTitle' => 'password'])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    @if (count($errors->all()) > 0)

    @foreach($errors->all() as $error)
        <div class="form-group">
            <div class="alert alert-danger">
                <li>{{ $error }}</li>
            </div>
        </div>
    @endforeach

    @endif
@endsection