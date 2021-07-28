@extends("layouts.admin")

@section("title", "Boolpress | Create post")

@section("content")
    <div class="container">
        <h1>Create a post</h1>

        @include("partials.errors")

        <!-- Form for creating a post -->
        <form class="d-flex flex-column" action="{{ route("admin.posts.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
        
            <!-- Post title -->
            <div class="d-flex flex-column mb-4">
                <label class="mr-3" for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ old("title") }}">
            </div>

            <!-- Post image -->
            <div class="d-flex flex-column mb-4">
                <label class="mr-3" for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>

            <!-- Post body -->
            <div class="d-flex flex-column mb-4">
                <label class="mr-3" for="title">Body</label>
                <input type="text" name="body" id="body" value="{{ old("body") }}">
            </div>

            <!-- Post author -->
            <div class="d-flex flex-column mb-4">
                <label class="mr-3" for="title">Author</label>
                <input type="text" name="author" id="author" value="{{ old("author") }}">
            </div>

            <!-- Post category -->
            <div class="d-flex flex-column mb-4">
                <label class="mr-3" for="category_id">Category</label>
                <select name="category_id" id="category_id" value="{{ old("category_id") }}">
                    <option disabled selected>Select a category</option>
                    
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary my-4">Submit post</button>
        </form>
    </div>
@endsection