<div class="container">
                @foreach ($posts as $post)
                    <h3>{{ $post->title }}</h3>
                    <p> {{ $post->user->name }} {{ $post->created_at }}</p>
                    <p>{{ $post->content }}</p>
                    <hr>
                @endforeach
        
</div>