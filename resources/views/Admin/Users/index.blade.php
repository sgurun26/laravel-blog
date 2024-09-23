@extends('layouts.admin_layout')

@section('content')

<div class="container">
<div class="d-flex justify-content-between align-items-center my-3">
    <h1>Users List</h1>
    <a href="{{ route('users.create') }}" class="btn btn-secondary">Add User</a>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($users as $user)
  <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td> {{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->role }}</td>
      <td class="flex">
        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <a href="{{ route('users.edit', $user->id) }}" class="block btn btn-secondary">Update</a>
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection