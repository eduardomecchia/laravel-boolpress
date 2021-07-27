@extends("layouts.admin")

@section("title", "Boolpress | Edit " . $post->title)

@section("content")
    <div class="container">
        <h1>Edit a post</h1>

        @include("partials.errors")

        <form class="d-flex flex-column" action="{{ route("admin.posts.update", $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
        
            <div class="post-title d-flex flex-column mb-4">
                <label class="mr-3" for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $post->title }}">
            </div>

            <div class="post-image d-flex flex-column mb-4">
                <label class="mr-3" for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>

            <div class="post-body d-flex flex-column mb-4">
                <label class="mr-3" for="title">Body</label>
                <input type="text" name="body" id="body" value="{{ $post->body }}">
            </div>

            <div class="post-author d-flex flex-column mb-4">
                <label class="mr-3" for="title">Author</label>
                <input type="text" name="author" id="author" value="{{ $post->author }}">
            </div>

            <div class="post-category d-flex flex-column mb-4">
                <label class="mr-3" for="category_id">Category</label>
                <select name="category_id" id="category_id">
                    <option disabled selected>Select a category</option>
                    
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == old("category_id", $post->category_id) ? "selected" : "" }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary my-4">Edit post</button>
        </form>
    </div>
@endsection