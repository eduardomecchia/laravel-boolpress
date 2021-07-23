@extends("layouts.app")

@section("content")
    <div class="container">
        <h1 class="font-weight-bold">Posts</h1>

        <div class="post-container">
            @foreach($posts as $post)
                <div class="post bg-dark rounded p-4 mb-4 d-block">
                    <div class="text-white mb-3 d-flex flex-column">
                        <div class="label font-weight-bold">Title:</div>
                        <div class="post-title">{{ $post->title }}</div>
            
                        <div class="label font-weight-bold mt-3">Author:</div>
                        <div class="post-author">{{ $post->author }}</div>

                        <div class="thumbnail my-4">
                            <img width="200" height="100" src="{{ asset("storage/" . $post->image) }}" alt="">
                        </div>
                    </div>

                    <div class="controls d-flex align-items-center">
                        <a href="{{ route("posts.show", $post->id) }}" class="btn btn-success">Open</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection