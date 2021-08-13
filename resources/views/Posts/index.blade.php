@extends('layouts.app')

@section('content')

<div class="container">
<div class="d-flex justify-content-between align-items-center my-3">
    <h1>Blog Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-secondary">Create Post</a>
</div>
    <ul class="list-unstyled d-flex flex-wrap">
        @foreach ($posts as $post)
            <li class="m-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read more...</a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection