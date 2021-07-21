@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1>Admin posts</h1>

        <a href="{{ route("admin.posts.create") }}" class="btn btn-primary my-4">Create post</a>
    
        <div class="post-container">
            @foreach($posts as $post)
                <div class="post bg-dark rounded p-4 mb-4 d-block">
                    <div class="text-white mb-3 d-flex flex-column">
                        <div class="label font-weight-bold">Title:</div>
                        <div class="post-title">{{ $post->title }}</div>
            
                        <div class="label font-weight-bold mt-3">Author:</div>
                        <div class="post-author">{{ $post->author }}</div>
                    </div>
                    
                    <div class="controls d-flex align-items-center">
                        <a href="{{ route("admin.posts.show", $post->id) }}" class="btn btn-success">Open</a>

                        <a href="{{ route("admin.posts.edit", $post->id) }}" class="btn btn-primary ml-4">Edit</a>
        
                        <form action="{{ route("admin.posts.destroy", $post->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
        
                            <button type="submit" class="btn btn-danger ml-4" onclick="confirm('Are you sure you want to delete this post?')">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection