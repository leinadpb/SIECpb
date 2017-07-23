<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('home')}}">
        <img alt="SIECpb" src="{{URL::to('images/siec-logo.svg')}}" width='30px' heigh='30px'>
      </a>
      <a class="navbar-brand" href="{{route('home')}}">SIECpb</a>
    </div>
    <div class="container-fluid">
	    <a class="navbar-text navbar-right" href="{{route('contacto')}}">Contacto</a>
	    <a class="navbar-text navbar-right" href="{{route('sobre-nosotros')}}">Sobre nosotros</a>
	    <a class="navbar-text navbar-right" href="{{route('portafolio')}}">Portafolio</a>
    </div>
  </div>
</nav>