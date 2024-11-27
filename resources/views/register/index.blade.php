@extends('layout.main')

@section('container')
<div class="row justify-content-center align-items-center">
    <div class="col-md-5">
        <main class="form-signin">
            <form class="mb-2" action="/register" method="post">
                @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Please Registrate</h1>
              <div class="form-floating">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" name="name" placeholder="Mikuju ismail" required>
                  <label for="name">Name </label>
                  @error('name')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" value="{{ old('username') }}" name="username" placeholder="Love Gaming2" required>
                <label for="username">Username </label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
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
            <small class="">Already have account? <a href="/login">Login now</a></small>
          </main>
    </div>
</div>
@endsection