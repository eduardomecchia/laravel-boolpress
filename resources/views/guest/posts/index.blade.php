@extends("layouts.app")

@section("title", "Boolpress | Posts")

@section("content")
    <div class="container">
        <h1 class="font-weight-bold">Posts</h1>

        <div class="post-container">
            @foreach($posts as $post)
                <!-- Post -->
                <div class="post bg-dark rounded p-4 mb-4 d-block">
                    <div class="text-white mb-3 d-flex flex-column">
                        <!-- Post title -->
                        <div class="font-weight-bold">Title:</div>
                        <div>{{ $post->title }}</div>
            
                        <!-- Post author -->
                        <div class="font-weight-bold mt-3">Author:</div>
                        <div>{{ $post->author }}</div>

                        <!-- Post category -->
                        <div class="font-weight-bold mt-3">Category:</div>
                        <div>{{ $post->category ? $post->category->name : "No category available" }}</div>

                        <!-- Post tags -->
                        <div class="font-weight-bold mt-3">Tags:</div>
                        <div>
                            @if($post->tags)
                                @foreach($post->tags as $tag)
                                    {{ $loop->last ? $tag->name : $tag->name . ',' }}
                                @endforeach
                            @endif
                        </div>

                        <!-- Post thumbnail -->
                        <div class="thumbnail my-4">
                            <img width="200" height="100" src="{{ asset("storage/" . $post->image) }}" alt="">
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <a href="{{ route("posts.show", $post->id) }}" class="btn btn-success">Open</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection