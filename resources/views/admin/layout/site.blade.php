<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title1')</title>
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a href="/" class="navbar-brand"><strong>tx</strong>Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarnavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="{{ route('posts.index') }}" class="nav-link">Home</a>
                </li>
            </ul>
        </div>
        @auth
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a href="#" id="navbarDropdown" class="nav-link dropdwon-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ auth()->user()->name }}
                <img src="{{ asset('storage/'. auth()->user()->profile->avatar) }}" alt="Foto de {{ auth()->user()->name }}" class="rounded-circle" width="50">
                <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                    <form action="{{ route('logout') }}" class="dropdown-item" method="post" style="display: none;">@csrf</form>
                    <a href="{{ route('profile.index') }}" class="dropdown-item">Profile</a>
                </div>
            </li>
        </ul>
        @endauth
    </nav>
    <div class="container">
       {{-- @include('flash::message3') --}}
        @yield('content3')
    </div>

    

<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>