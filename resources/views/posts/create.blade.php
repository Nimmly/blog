@extends('layouts.master')

@section('title')
    Create new post
@endsection

@section('content')
    

    <form method="POST" action='/posts'>
    <h2>Create new post</h2>
    {{ csrf_field() }}
        <div class="form-group">

            <label for="title">Ovo je naslov</label>
            <input id = "title" type= "text" name="title" class= "form-control">
            @include('partials.error-message', ['fieldTitle' => 'title'])
        </div>

        <div class="form-group">
            <label for="body"> Ovo je body</label>
            <textarea class="form-control" id="body" name="body"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'body'])
        </div>

        <div class="form-group">
            <label for="is_published">Objavi?</label>
            <input type="checkbox" class="form-control" id="is_published" name="is_published" value="1" checked>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection