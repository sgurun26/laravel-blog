@extends('layouts.admin_layout')


@section('content')
<div class="container">
    <h1>Update user</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('users.update', $user->id) }}"" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" value="{{$user->name}}" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Email</label>
            <input name="email" value="{{$user->email}}" type="email" class="form-control">
        </div>

        @if ($user->role !== 'admin')
        <div class="form-group">
            <label for="content">Role</label>
            <select name="role" class="custom-select" id="inputGroupSelect01">
            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>user</option>
            <option value="author" {{ $user->role == 'author' ? 'selected' : '' }}>author</option>
            </select>
        </div>
        @else
        <p><strong>Role:</strong> Your are Admin</p>
    @endif

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection