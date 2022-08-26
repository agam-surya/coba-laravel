<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark position-sticky">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse p-2" id="navbarCollapse">
      <ul class="navbar-nav mb-2 mb-md-0">
        <li class="nav-item"> <a class="nav-link {{ $active === 'home' ? 'active':''}}" href="/">HOME</a>
        </li>
        <li class="nav-item"> <a class="nav-link {{ $active === 'about' ? 'active':''}}" href="/about">ABOUT</a>
        </li>
        <li class="nav-item"> <a class="nav-link {{ $active === 'post' ? 'active':''}}" href="/posts">POSTS</a>
        </li>
        <li class="nav-item"> <a class="nav-link {{ $active === 'portfolio' ? 'active':''}}" href="/portfolio">PORTFOLIO</a>
        </li>
        <li class="nav-item"> <a class="nav-link {{ $active === 'categories' ? 'active':''}}" href="/categories">CATEGORIES</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse p-2"></i>dashboard</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right p-2"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item"> <a class="nav-link {{ $active === 'login' ? 'active':''}}" href="/login">Login</a>

          @endauth
      </ul>
    </div>
  </div>

</nav>