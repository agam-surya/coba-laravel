<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark position-sticky">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
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
        <li class="nav-item"> <a class="nav-link {{ $active === 'login' ? 'active':''}}" href="/login">Login</a>
      </ul>
    </div>
  </div>

</nav>