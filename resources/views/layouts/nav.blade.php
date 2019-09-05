<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="/">
        <img src="{{url('/img/logo.png')}}" alt="Associate Consultants" class="navbar-logo">
      </a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{$menu_item=='home'?'active':''}}" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$menu_item=='about'?'active':''}}" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$menu_item=='services'?'active':''}}" href="{{route('services')}}">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$menu_item=='projects'?'active':''}}" href="{{route('projects')}}">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$menu_item=='clients'?'active':''}}" href="{{route('clients')}}">Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$menu_item=='careets'?'active':''}}" href="{{route('careers')}}">Careers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$menu_item=='contact'?'active':''}}" href="{{route('contact')}}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
