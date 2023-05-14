<nav class="navbar navbar-dark bg-black ">
  <div class="container-fluid">  
      <img class="h-12 w-12 rounded-full justify-content-center " src="{{ asset('302179864_590589979233604_6065662076440204313_n (1).jpg') }}" alt="">
    <h1 class="text-titulo1 text-white text-xl font-bold border-bottom border-primary">&nbsp;FalCodeIDS </h1>

    
    <button class="navbar-toggler custom-toggler border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="offcanvas offcanvas-end text-bg-dark  " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title  text-center" id="offcanvasDarkNavbarLabel">Bienvenidos</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active d-flex align-items-center justify-content-center text-decoration-none" href="{{ route('Home') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door me-2" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
              </svg>
              Menú
            </a>
          </li>
          
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Temas sobre de la programación web
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item r text-center" href="{{ route('Frameworks') }}">Frameworks Js</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item r text-center" href="#">Another action</a></li>
              <li>
   <li><a class="dropdown-item r text-center" href="#">Something else here</a></li>  
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <div class="container d-flex justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active d-flex align-items-center justify-content-center text-decoration-none btn btn-danger" href="#">
                    &nbsp;   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                    </svg>&nbsp;&nbsp;
                    Proximamente&nbsp;&nbsp;
                  </a>
                </li>
               
              </div>
              
            </ul>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</nav>