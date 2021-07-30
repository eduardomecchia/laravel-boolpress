@extends('layouts.app')

@section('content')
    <div class="container" id="app">
        <h1>Blog</h1>

        <div class="posts container d-flex flex-wrap">
            <div class="card text-left mb-3 p-4" v-for="post in posts">
                <img class="img-fluid rounded" :src="post.image ? 'storage/' + post.image : '/img/placeholder.png'" width="200" alt="">

                <div class="card-body p-0 mt-4">
                    <h4 class="card-title">@{{ post.title }}</h4>
                    
                    <span class="font-weight-bold">@{{ post.author }}</span>

                    <div>@{{ post.category ? post.category.name : "No category available" }}</div>

                    <div class="tags d-flex flex-wrap my-3">
                        <div class="bg-primary rounded mr-3 text-white py-2 px-3" v-for="tag in post.tags">
                            <span>@{{ tag.name }}</span>
                        </div>
                    </div>

                    <p class="card-text">@{{ post.body }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection