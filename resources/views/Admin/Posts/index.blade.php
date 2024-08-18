@extends('layouts.admin_layout')

@section('content')

<div class="container">
<div class="d-flex justify-content-between align-items-center my-3">
    <h1>Blog Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-secondary">Create Post</a>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Author</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($posts as $post)
  <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td> <a href="{{ route('posts.show', $post->id) }}"> {{ $post->title }}</a></td>
      <td>{{ $post->content }}</td>
      <td>{{ $post->user }}</td>
      <td class="flex">
        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <a href="{{ route('posts.edit', $post->id) }}" class="block btn btn-secondary">Update</a>
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection