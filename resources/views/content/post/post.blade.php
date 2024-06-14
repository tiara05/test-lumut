@extends('layouts.main')

@section('contents')
    <div class="container mt-4">
        <h2>Data Post</h2>
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('posts.create') }}" class="btn btn-success">Create New User</a>
        </div>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Date</th>
                    <th scope="col">Username</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>
                            <a href="/posts/{{ $post->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                            <form action="/posts/{{ $post->id }}" method="post" class="d-inline">
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
