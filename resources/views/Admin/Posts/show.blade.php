@extends('layouts.admin_layout')
@section('content')
<div class="container">
<div class="d-flex justify-content-between align-items-center my-3">
    <h1>Blog Post Details</h1>
    <div class="d-flex align-items-center gap-2">
    <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
</div>
</div>
    
    <ul>
        <li>ID: {{ $post->id }}</li>
        <li>Title: {{ $post->title }}</li>
        <li>Content: {{ $post->content }}</li>
    </ul>
</div>

@endsection