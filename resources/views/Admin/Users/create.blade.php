@extends('layouts.admin_layout')

@section('content')
<div class="container">
    <h1>Add new user</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Email</label>
            <input name="email" type="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Password</label>
            <input name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Role</label>
            <select name="role" class="custom-select" id="inputGroupSelect01">
                <option selected value="user">user</option>
                <option value="author">author</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection