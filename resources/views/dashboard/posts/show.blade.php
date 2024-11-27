@extends('dashboard.layout.main')

@section('container')
<article class="mt-4">
    <h1>{{ $post['title'] }}</h1>
    <p>By. <a href="/posts?author={{ $post->author->name }}" class="fs-6 text-decoration-none fw-semibold">{{ $post->author->name }}</a> In 
    <a href="/posts?category={{ $post->category->slug }}" class="fs-6 text-decoration-none fw-semibold">{{ $post->category->name }}</a>
    </p>
    <a href="/dashboard/posts" class="btn btn-secondary">Back to Blog</a>
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline-block">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger border-0" onclick="return confirm('Are you sure to delete?')">Delete</button>
    </form>
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
    <p class="mt-4">{!! $post['body'] !!}</p>
</article>
@endsection