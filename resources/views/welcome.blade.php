@extends('layouts.app')

@section('content')
<div class="container">
@auth
<div>
<div class="d-flex justify-content-between align-items-center my-3">
    <h1>Blog Posts</h1>
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
@endauth

@guest
    <!-- The user is not logged in -->
    <p>Please <a href="{{ route('login') }}">log in</a> to continue.</p>
@endguest
</div>
@endsection
