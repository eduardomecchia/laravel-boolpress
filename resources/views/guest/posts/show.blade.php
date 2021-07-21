@extends("layouts.app")

@section("content")
    <div class="container">
        <h1 class="font-weight-bold">{{ $post->title }}</h1>
        
        <div>{{ $post->body }}</div>
        
        <div class="author d-flex mt-5">
            <div class="label font-weight-bold">Author:</div>
            <div class="author-name ml-2">{{ $post->author }}</div>
        </div>
    </div>
@endsection