@extends('dashboard.layout.main')

@section('container')
@if (session('success'))

    <div class="alert alert-success alert-dismissible fade show mt-2 col-md-10" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

@endif
<h2 class="mt-4 border-bottom col-md-10 pb-2">Post Made by You</h2>
<div class="table-responsive col-md-10">
  <a href="/dashboard/posts/create" class="btn btn-primary mt-3">Create New Post</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Category</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
          
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{!! substr($post->body, 0, 100) !!}</td>
        <td>{{ $post->category->name }}</td>
        <td>
          <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-decoration-none">See</a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none">Edit</a>
          <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline-block">
            @method('DELETE')
            @csrf
            <button type="submit" class="badge text-bg-danger border-0" onclick="return confirm('Are you sure to delete?')">Delete</button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection