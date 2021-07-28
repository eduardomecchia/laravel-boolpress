@extends("layouts.admin")

@section("title", "Boolpress | " . $post->title)

@section("content")
    <div class="container">
        <!-- Post title -->
        <h1 class="font-weight-bold">{{ $post->title }}</h1>

        <!-- Post category -->
        <h5>Category: {{ $post->category ? $post->category->name : "No category available" }}</h5>
        
        <!-- Post image -->
        <div class="my-4">
            <img class="img-fluid" src="{{ asset("storage/" . $post->image) }}" alt="">
        </div>

        <!-- Post body -->
        <div>{{ $post->body }}</div>
        
        <!-- Post author -->
        <div class="d-flex mt-5">
            <div class="label font-weight-bold">Author:</div>
            <div class="ml-2">{{ $post->author }}</div>
        </div>
    </div>
@endsection