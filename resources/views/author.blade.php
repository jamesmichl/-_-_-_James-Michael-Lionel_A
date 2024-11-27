@extends('layout.main')

@section('container')
    <div class="row responsive" style="height: 200px; gap: 10px;">
        @foreach( $authors as $author )
            <a class="text-white col-md-3 col-sm-4 col-lg d-flex justify-content-center align-items-center bg-secondary text-decoration-none" href="/categories/{{ $author->name }}"><p>{{ $author->name }}</p></a>
        @endforeach
    </div>
@endsection