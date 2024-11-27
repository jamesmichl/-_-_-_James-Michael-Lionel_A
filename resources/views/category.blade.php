@extends('layout.main')

@section('container')
    <div class="row responsive" style="height: 200px; gap: 10px;">
        @foreach( $categories as $category )
            <a class="text-white col-md-3 col-sm-4 col-lg d-flex justify-content-center align-items-center bg-secondary text-decoration-none" href="/posts?category={{ $category->slug }}"><p>{{ $category->name }}</p></a>
        @endforeach
    </div>
@endsection