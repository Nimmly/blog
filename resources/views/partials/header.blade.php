<div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        @if(Auth()->check())
        <div>{{ Auth()->user()->name }}</div>
        <a href ='/logout'>logout</a>
        @else
          <a href="/login">Login</a>
          <a href="/register">Register</a>
        @endif
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
      </div>
    </div>