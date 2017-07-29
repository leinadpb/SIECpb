<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('home')}}">
        <img alt="SIECpb" src="https://www.dropbox.com/s/yzjp717ld66tcq4/SIEC-LOGO.svg?raw=1" width='30px' heigh='30px'>
      </a>
      <a class="navbar-brand" href="{{route('home')}}">SIECpb</a>
    </div>
    <div class="container-fluid" align="right">
      <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{route('portafolio')}}">Portafolio <span class="sr-only">(current)</span></a></li>
        <li><a href="{{route('sobre-nosotros')}}">Sobre nosotros</a></li>
        <li><a href="{{route('contacto')}}">Contacto</a></li>

      </ul>
      <!-- 
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      -->
      <ul class="nav navbar-nav navbar-right">
        @if (!Auth::guest())
        <li><a href="{{ url('/register') }}">Agregar administrador</a></li>          
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li>
                  <a href="{{ route('add_product') }}">
                      Añadir elemento
                  </a>
              </li>
              <li>
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
          </ul>
      </li>
      @endif
      </ul>
    </div><!-- /.navbar-collapse -->
    </div>
  </div>
</nav>