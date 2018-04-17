
@extends('layouts.master')

@section ('title')
Blog
@endsection

@section('content')    
    <ul>
        @foreach($posts as $post)
           <li> 
            <a href="{{ route ('single-post', ['id'=> $post->id] ) }}">{{ $post->title }}</a>
            <p>by <i><a href="{{ route('users', ['user_id' => $post->user_id]) }}">{{ $post->user->name  }}</a></i></p>
            <small>
                @foreach($post->tags as $tag)
                    <a href="{{ route('posts-tags', ['tag' => $tag]) }}">{{ $tag->name }}</a>
                @endforeach
            </small>
           </li> 
        @endforeach
   </ul>

   

   <nav class="blog-pagination">
            <a class="btn btn-outline-primary{{ $posts->currentPage() == 1 ? 'secondary disabled' : 'primary' }}" 
            href="{{ $posts->previousPageUrl() }}">Prev</a>
            <a class="btn btn-outline-{{ $posts->hasMorePages() ? 'primary' : 'secondary disabled' }} " href="{{ $posts->nextPageUrl() }}">Next</a>
          </nav>
@endsection
