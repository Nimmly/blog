
@extends('layouts.master')

@section ('title')
Blog
@endsection

@section('content')    
    <ul>
        @foreach($posts as $post)
           <li> 
            <a href="{{ route ('single-post', ['id'=> $post->id] ) }}">{{ $post->title }}</a>
            <p>by <i><a href="{{ route('users', ['user_id' => $post->user_id]) }}">{{ $post->user->name }}</a></i></p>
           </li> 
        @endforeach
   </ul>
@endsection
