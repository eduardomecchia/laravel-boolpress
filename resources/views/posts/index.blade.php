@extends("layouts.app")

@section("content")
<h1>Posts</h1>

@foreach($posts as $post)
    <a class="post" hreF="{{ route("posts.show", $post->id) }}">
        <div class="post-title">{{ $post->title }}</div>

        <div class="post-author">{{ $post->author }}</div>
    </a>
@endforeach
@endsection