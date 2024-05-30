@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <hr>
    <h2>Comments</h2>
    @foreach ($post->comments as $comment)
        <p>{{ $comment->content }}</p>
        <small>by {{ $comment->user->name }}</small>
        <hr>
    @endforeach
    <form method="POST" action="{{ route('comments.store', $post->id) }}">
        @csrf
        <textarea name="content" placeholder="Add a comment" required></textarea>
        <button type="submit">Comment</button>
    </form>
@endsection
