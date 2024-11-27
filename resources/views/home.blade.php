@extends('layout.main')

@section('container')
<h1>Hello, world!</h1>
<h1>{{ $content }}</h1>
<img src="image/{{ $image }}" alt="">
@endsection
