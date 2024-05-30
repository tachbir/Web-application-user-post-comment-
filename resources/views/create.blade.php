@extends('layouts.app')

@section('content')
    <h1>Create a New Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="content" placeholder="Content" required></textarea>
        <button type="submit">Create</button>
    </form>
@endsection
