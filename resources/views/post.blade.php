@extends('layout.main')

@section('container')
    <article>
        <h1>{{ $post['title'] }}</h1>
        <p>By. <a href="/posts?author={{ $post->author->name }}" class="fs-6 text-decoration-none fw-semibold">{{ $post->author->name }}</a> In 
        <a href="/posts?category={{ $post->category->slug }}" class="fs-6 text-decoration-none fw-semibold">{{ $post->category->name }}</a></p>
        <p class="mt-4">{!! $post['body'] !!}</p>
    </article>
    <a href="/posts">Back to Blog</a>
@endsection