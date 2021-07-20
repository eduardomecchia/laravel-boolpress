@extends("layouts.app")

@section("content")
    <div class="container">
        <h1>{{ $post->title }}</h1>
        
        <div>{{ $post->body }}</div>
        
        <div>{{ $post->author }}</div>
    </div>
@endsection