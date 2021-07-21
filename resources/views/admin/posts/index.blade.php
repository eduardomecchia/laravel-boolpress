@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1>Admin posts</h1>

        <a href="{{ route("admin.posts.create") }}" class="btn btn-primary my-4">Create post</a>
    
        @foreach($posts as $post)
            <a class="post mb-3 d-flex flex-column" hreF="{{ route("admin.posts.show", $post->id) }}">
                <div class="post-title">{{ $post->title }}</div>
    
                <div class="post-author">Author: {{ $post->author }}</div>

            </a>

            <a href="{{ route("admin.posts.edit", $post->id) }}" class="btn btn-primary mb-5">Edit</a>
        @endforeach
    </div>
@endsection