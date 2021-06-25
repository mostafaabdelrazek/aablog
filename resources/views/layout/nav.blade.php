<div class="nav-wrapper" id='header'>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark  ">
            <a class="navbar-brand" href="#"><img src="{{url('images/logo.png')}}"  /> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse " id="navbarNav" style="padding-left: 6.5rem;">
              <ul class="navbar-nav " >
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                  <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }} ">
                  <a class="nav-link" href="{{url('/about')}}">About</a>
                </li>
                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                  <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="{{url('/blogs')}}">Blogs</a>
                  </li>
              </ul>
            </div>
          </nav>
    </div>
</div>