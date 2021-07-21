@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1>Admin posts</h1>
    
        @foreach($posts as $post)
            <a class="post mb-3 d-flex flex-column" hreF="{{ route("posts.show", $post->id) }}">
                <div class="post-title">{{ $post->title }}</div>
    
                <div class="post-author">Author: {{ $post->author }}</div>
            </a>
        @endforeach
    </div>
@endsection