<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">Study Low</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $title === 'home' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === 'blog' ? 'active' : '' }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === 'category' ? 'active' : '' }}" href="/categories">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === 'about' ? 'active' : '' }}" href="#">Add Book</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
              <form action="/logout" method="get">
                <li><button class="dropdown-item" type="submit">Log out</button></li>
              </form>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a href="/login" class="nav-link {{ $title === 'login' ? 'active' : '' }}">Login <i class="bi bi-box-arrow-in-right"></i></a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>