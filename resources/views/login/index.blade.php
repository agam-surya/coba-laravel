@extends("layouts/layout")
@section('content')

<div class="row justify-content-center">
  <div class="col-md-4 p-1">
    <main class="form-signin">

      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating mb-1">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required>
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">{{$message}}</div>
          @enderror
        </div>
        <div class="form-floating mb-1">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
      </form>
      <small class="d-block mt-3 text-center">Not Registered ? <a href="/register">Register Now</a></small>
    </main>
  </div>
</div>

@endsection