@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @foreach ($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p>Posted by: {{ $post->user->name }}</p>
            <p>Posted at: {{ $post->created_at->format('Y-m-d H:i:s') }}</p>
            <a href="{{ route('posts.show', $post->id) }}">Read more</a>
        </div>
        <hr>
    @endforeach
@endsection
