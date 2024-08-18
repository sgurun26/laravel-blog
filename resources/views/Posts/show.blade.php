@extends('layouts.app')
@section('content')
<div class="container">
<div class="d-flex justify-content-between align-items-center my-3">
    <h1>Blog Post Details</h1>
    <div class="d-flex align-items-center gap-2">
    <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Update</a>
</div>
</div>
    
    <ul>
        <li>ID: {{ $post->id }}</li>
        <li>Title: {{ $post->title }}</li>
        <li>Content: {{ $post->content }}</li>
    </ul>
</div>

@endsection