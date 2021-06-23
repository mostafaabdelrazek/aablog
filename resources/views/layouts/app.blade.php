<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin side| @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    @yield('styles')
    <!-- Styles -->
    <style>
      .btn-mr{
        margin-top: 1rem
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
          </ul>
          <ul class="navbar-nav nav navbar-right">
            <li class="nav-item dropdown">
              @if(Auth::check())
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Control
              </a>
              <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{route('posts.index')}}"><i class="fab fa-dropbox"></i> Posts</a>
                <a class="dropdown-item" href="{{route('categories.index')}}"><i class="fas fa-tasks"></i> Categories</a>
                <a class="dropdown-item" href="{{route('tags.index')}}"><i class="fas fa-tags"></i> Tags</a>
                <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}"
                    class="dropdown-item"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout 
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            </div>
            </li>
        </ul>
            @else
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a href="{{route('login')}}" class="nav-link">Login</a>
                </li>
                <a href="{{route('register')}}" class="nav-link">Registeration</a>
            </ul>
            @endif
        </div>
      </nav>  
@include('layouts.errors') 
@yield('content')


@yield('scripts')
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/921253f3a2.js" crossorigin="anonymous"></script>

</body>
</html>
