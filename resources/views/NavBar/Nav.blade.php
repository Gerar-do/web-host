<nav class="navbar navbar-dark bg-neutral-900 fixed-top">
  <div class="container-fluid">

    <img class="h-13 w-14 rounded-full" src="https://scontent.ftgz3-1.fna.fbcdn.net/v/t39.30808-6/302179864_590589979233604_6065662076440204313_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=6VdNJZveuqMAX92VWfx&_nc_ht=scontent.ftgz3-1.fna&oh=00_AfB7QO3A2eaP2KHngsLz9ckkUz0XNCYpMnIpkTZfPiDsoQ&oe=644C948D" alt="">
    <h1 class="text-titulo1 text-white fs-3">FalCode Ids Blog</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Bienvenido</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active"  href="{{ route('Home') }}">Menú</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Temas dentro de la programación web
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="{{ route('Frameworks') }}">Frameworks Js</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</nav>