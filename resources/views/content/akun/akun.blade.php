@extends('layouts.main')

@section('contents')
    <div class="container mt-4">
        <h2>Data Akun</h2>
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('users.create') }}" class="btn btn-success">Create New User</a>
        </div>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        @if ($user->role_id == 1)
                        <td>Admin</td>
                        @elseif ($user->role_id == 2)
                        <td>Author</td>
                        @endif
                        <td>
                            <a href="/users/{{ $user->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                            <form action="/users/{{ $user->id }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
