<div class="navigation-wrap nav-background
            start-header start-style">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-md navbar-dark">

          <a class="navbar-brand"  href="{{ route('sirius_d')}}"><img src= "{{asset('img/logo.gif')}}"> </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto py-4 py-md-0 list">
              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Клуб</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Радиестезиа</a>
                  <a class="dropdown-item" href="{{ route('frontposts')}}">Публикации</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <a class="dropdown-item" href="#">Another action</a>
                </div>
              </li>
              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="nav-link" href="#">Радиестезиа</a>
              </li>
              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="nav-link" href="{{ route('frontposts')}}">Blog</a>
              </li>
              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Сириус-Д</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <a class="dropdown-item" href="#">Another action</a>
                </div>
              </li>
              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="nav-link" href="#">Хармония</a>
              </li>
              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="nav-link" href="#">За нас</a>
              </li>
              @if (Route::has('login'))

                      @auth
                          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                              <a  class="nav-link" href="{{ url('/home') }}">Home</a>
                          </li>
                      @else
                          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                              <a  class="nav-link" href="{{ route('login') }}">Login</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                  <a class="nav-link" href="{{ route('register') }}">Register</a>
                              </li>
                          @endif
                      @endauth

              @endif

            </ul>
          </div>

        </nav>
      </div>
    </div>
  </div>
</div>
