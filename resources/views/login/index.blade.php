@extends('layout.main')

@section('container')
@if (session('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

@endif
@if (session('loginError'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

@endif
<div class="row justify-content-center align-items-center">
    <div class="col-md-5">
        <main class="form-signin">
            <form class="mb-2" method="post" action="/login">
                @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
              <div class="form-floating">
                <input type="email" class="form-control @error('name') is-invalid @enderror" id="email" value="{{ old('email') }}" name="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control @error('name') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>
            <small class="">Not registered? <a href="/register">Register now</a></small>
          </main>
    </div>
</div>
@endsection