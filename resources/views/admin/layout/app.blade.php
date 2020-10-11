<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') txblog</title>

    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
</head>
<body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <a href="/" class="navbar-brand"><strong>tx</strong>Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        @auth
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a href="{{ route('posts.index') }}" class="nav-link">Posts</a>
              </li>
              <li class="nav-item active">
                <a href="{{ route('categories.index') }}" class="nav-link">Categories</a>
              </li>
            </ul>
        @endauth
      </div>
      @auth
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ auth()->user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                  <form id="logout-form"  action="{{ route('logout') }}" method="post" style="display: none"> @csrf </form>
                   <a href="{{ route('profile.index') }}" class="dropdown-item">Meu perfil</a>
                </div>
              </a>
            </li>
          </ul>
      @endauth
    </nav> 
    <div class="container mt-5">
      @include('flash::message')
      @yield('content2')
  </div>
  <div class="container">    
      @yield('content')
  </div>

<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>