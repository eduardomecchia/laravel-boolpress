@extends("layouts.admin")

@section("content")
<div class="container">
    <h1>Create a post</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="m-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="d-flex flex-column" action="{{ route("admin.posts.store") }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="post-title d-flex flex-column mb-4">
            <label class="mr-3" for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old("title") }}">
        </div>

        <div class="post-image d-flex flex-column mb-4">
            <label class="mr-3" for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>

        <div class="post-body d-flex flex-column mb-4">
            <label class="mr-3" for="title">Body</label>
            <input type="text" name="body" id="body" value="{{ old("body") }}">
        </div>

        <div class="post-author d-flex flex-column mb-4">
            <label class="mr-3" for="title">Author</label>
            <input type="text" name="author" id="author" value="{{ old("author") }}">
        </div>

        <button type="submit" class="btn btn-primary my-4">Submit post</button>
    </form>
</div>
@endsection