@extends('layouts.main')

@section('contents')
    <div class="container mt-4">
        <h2>Update Post</h2>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" name="content">{{ $post->content }}</textarea>
            </div>
           
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection



