@extends("layouts.admin")

@section("title", "Boolpress | Edit " . $post->title)

@section("content")
    <div class="container">
        <h1>Edit a post</h1>

        @include("partials.errors")

        <!-- Form for editing a post -->
        <form class="d-flex flex-column" action="{{ route("admin.posts.update", $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
        
            <!-- Post title -->
            <div class="d-flex flex-column mb-4">
                <label class="mr-3" for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $post->title }}">
            </div>

            <!-- Post image -->
            <div class="d-flex flex-column mb-4">
                <label class="mr-3" for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>

            <!-- Post body -->
            <div class="d-flex flex-column mb-4">
                <label class="mr-3" for="title">Body</label>
                <input type="text" name="body" id="body" value="{{ $post->body }}">
            </div>

            <!-- Post author -->
            <div class="d-flex flex-column mb-4">
                <label class="mr-3" for="title">Author</label>
                <input type="text" name="author" id="author" value="{{ $post->author }}">
            </div>

            <!-- Post category -->
            <div class="d-flex flex-column mb-4">
                <label class="mr-3" for="category_id">Category</label>
                <select name="category_id" id="category_id">
                    <option disabled selected>Select a category</option>
                    
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == old("category_id", $post->category_id) ? "selected" : "" }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Post tags -->
            <div class="d-flex flex-column mb-4">
                <label for="tags" class="mr-3">Tags</label>
                <select name="tags[]" id="tags" multiple>
                    <option value="" disabled>Select tags</option>

                    @if($tags)
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}" {{ $post->tags->contains($tag) ? "selected" : "" }}>{{ $tag->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <button type="submit" class="btn btn-success my-4">Edit post</button>
        </form>
    </div>
@endsection