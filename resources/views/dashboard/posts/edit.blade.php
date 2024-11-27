@extends('dashboard.layout.main')

@section('container')
<h2 class="my-4">Edit the Post</h2>
<div class="col-lg-8">
    <form action="/dashboard/posts/{{ $post->slug }}" method="post">
        @method('put')
        @csrf 
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Text some title here" value="{{ old('title',$post->title) }}" name="title" required>
            @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
             @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug',$post->slug) }}" name="slug" required>
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
               @enderror
            </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-control" aria-label="Default select example" name="category_id" required>
            <option value="{{ $post->category->id }}" selected>{{ $post->category->name }}</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="my-3">
          <label for="category" class="form-label">Body</label>
          @error('body')
          <small class="text-danger d-block mb-2">
            {{ $message }}
          </small>
          @enderror
          <input id="x" type="hidden" name="body" value="{{ old('body',$post->body) }}" required>
          <trix-editor input="x" placeholder="Place your content here"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Edit Post</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
            .catch(err => console.log(err));
    });
    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })
</script>
@endsection