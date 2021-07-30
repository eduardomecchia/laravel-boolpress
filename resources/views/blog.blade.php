@extends('layouts.app')

@section('content')
    <div class="container" id="app">
        <h1>Blog</h1>

        <div class="posts container d-flex flex-wrap">
            <div class="card text-left mb-3 p-4" v-for="post in posts">
                <img class="img-fluid rounded" :src="post.image ? 'storage/' + post.image : '/img/placeholder.png'" width="200" alt="">
                <div class="card-body p-0 mt-4">
                    <h4 class="card-title">@{{ post.title }}</h4>
                    <div>@{{ post.category ? post.category.name : "No category available" }}</div>
                    <span>@{{ post.author }}</span>
                    <p class="card-text">@{{ post.body }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection