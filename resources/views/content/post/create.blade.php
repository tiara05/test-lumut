@extends('layouts.main')

@section('contents')
    <div class="container mt-4">
        <h2>Create New Content</h2>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" name="content">{{ old('content') }}</textarea>
            </div>
           
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
