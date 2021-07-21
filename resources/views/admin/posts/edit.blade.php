@extends("layouts.admin")

@section("content")
<div class="container">
    <h1>Edit a post</h1>

    <form class="d-flex flex-column" action="{{ route("admin.posts.edit", $post->id) }}" method="POST">
        @csrf
    
        <div class="post-title d-flex flex-column mb-4">
            <label class="mr-3" for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old("title") }}">
        </div>

        <div class="post-body d-flex flex-column mb-4">
            <label class="mr-3" for="title">Body</label>

            <input type="text" name="body" id="body" value="{{ old("title") }}">
        </div>

        <div class="post-author d-flex flex-column mb-4">
            <label class="mr-3" for="title">Author</label>

            <input type="text" name="author" id="author" value="{{ old("title") }}">
        </div>

        <button type="submit" class="btn btn-primary my-4">Edit post</button>
    </form>
</div>
@endsection