{{-- @dd($posts) --}}
@extends('layout.main')

@section('container')
<h1 class="mb-3">{{$title }} :</h1>
<div class="row">
    <div class="col-md-6">
        <form action="/posts" action="get">
        <div class=" input-group mb-3 col-md-6">
            @if (request('page'))
                <input type="hidden" class="form-control" placeholder="Find it" name="page" value="{{ request('page') }}">   
            @endif
            @if (request('category'))
                <input type="hidden" class="form-control" placeholder="Find it" name="category" value="{{ request('category') }}">   
            @endif
            @if (request('author'))
                <input type="hidden" class="form-control" placeholder="Find it" name="author" value="{{ request('author') }}">   
            @endif
                <input type="text" class="form-control" placeholder="Find it" name="search" value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="button" id="search">Search</button>
            </div>
        </form>
    </div>
</div>
@if(count($posts) > 0)
@foreach($posts as $post)
    <article class="my-3">
        <a href="/posts/{{ $post['slug'] }}" class="fs-2 text-decoration-none fw-semibold d-block">{{ $post['title'] }}</a>
        <a href="/posts?author={{ $post->author->name }}" class="fs-6 text-decoration-none fw-semibold">By. {{ $post->author->name }}</a> In 
        <a href="/posts?category={{ $post->category->slug }}" class="fs-6 text-decoration-none fw-semibold">{{ $post->category->name }}</a>
        <p>{!! substr($post->body, 0, 300) !!}</p>
</article>
@endforeach
{{ $posts->links() }}
@else
    <h3>No post found</h3>
@endif
@endsection