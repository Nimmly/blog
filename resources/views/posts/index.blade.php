
@extends('layouts.master')

@section ('title')
Blog
@endsection

@section('content')    
    <ul>
        @foreach($posts as $post)
        <li>
            <a href="{{ route ('single-post', ['id'=> $post->id] ) }}">{{ $post->title }}</a>
        </li>
        @endforeach
    </ul>
@endsection
