<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="shortcut icon" href="{{ asset('302179864_590589979233604_6065662076440204313_n.ico') }}">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <title>Home Blog</title>

  <style>

.text-titulo1{
  font-family: 'Courgette', cursive;
}


.block1 {
  position: relative;
  height: 400px;
  background: linear-gradient(0deg, black, rgb(44, 43, 43));
  border-radius: 1.1rem;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1rem;
}

@media screen and (max-width: 768px) {
  .block1 {
    margin-top: 10vh;
    height: 50vh;
  }
  
  .block1 h1 {
    font-size: 3rem;
  }
  
  .block1 p {
    font-size: 1.2rem;
  }
}

.glow1::before,
.glow1::after {
  content: "";
  position: absolute;
  left: -2px;
  top: -2px;
  background: linear-gradient(
    45deg,
    #e6fb04,
    #ff6600,
    #00ff66,
    #00ffff,
    #ff00ff,
    #ff0099,
    #6e0dd0,
    #ff3300,
    #099fff
  );
  background-size: 400%;
  width: calc(100% + 5px);
  height: calc(100% + 5px);
  z-index: -1;
  animation: animate 70s linear infinite;
  border-radius: 1.1rem;
}

@keyframes animate {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.glow1::after {
  filter: blur(40px);
}
.custom-toggler .navbar-toggler-icon {
  
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgb(0,0,0)' stroke-width='3' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");


}
.bg-personalizado{
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
background-image: url(https://images.unsplash.com/photo-1574192324001-ee41e18ed679?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)
}

  
  </style>



    </head>
    <body  class="bg-personalizado">
      @include('NavBar/Nav')

      <div class="relative overflow-hidden bg-transparent">
        <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
          <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
            <div class="sm:max-w-lg">
              <h1 class="font text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">web programming blog</h1>
              <p class="mt-4 text-xl text-gray-500">A programming web blog is a website that provides informative and educational articles on various aspects of web development, primarily aimed at a programming  audience Front-end.</p>
            </div>
            <div>
              <div class="mt-10">
              
      
                <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">proximamente</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
       <br>
      <br>
    <section class="bg-white">
   
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 text-center  bg-white">
      
        <div class="overflow-hidden  py-12 sm:py-12  " >
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pr-8 lg:pt-4">
                  <div class="lg:max-w-lg">
                    <h2 class="text-3xl font-semibold leading-7 text-gray-900">5 tips importantes de programación para mejorar tu flujo de trabajo</h2>
                    <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-gray-900">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 3a7 7 0 017 7v1a1 1 0 11-2 0v-1a5 5 0 00-5-5h-1a1 1 0 110-2h1zm0 4a3 3 0 100 6 3 3 0 000-6z" clip-rule="evenodd" />
                                </svg>
                                Utiliza atajos de teclado.
                            </dt>
                            <dd class="inline">Aprende los atajos de teclado de tu editor de texto para ser más eficiente al programar.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-gray-900">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5 5a5 5 0 0110 0v2a5 5 0 01-10 0V5zm7 9a5 5 0 100-10 5 5 0 000 10zM5 10a5 5 0 1110 0 5 5 0 01-10 0z" clip-rule="evenodd" />
                                </svg>
                                Usa herramientas de automatización.
                            </dt>
                            <dd class="inline">Ahorra tiempo y reduce errores automatizando tareas repetitivas con herramientas como scripts y macros.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-gray-900">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M3 3a1 1 0 011-1h2.586a1 1 0 01.707.293l8.414 8.414a1 1 0 010 1.414l-8.414 8.414a1 1 0 01-1.414-1.414L13.586 11H4a1 1 0 01-1-1V3z" />
                                </svg>
                                Organiza tu código.
                            </dt>
                            <dd class="inline">Mantén tu código ordenado y fácil de leer utilizando convenciones de nomenclatura y estructuras lógicas.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-gray-900">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5 5a5 5 0 0110 0v2a5 5 0 01-10 0V5zm7 9a5 5 0 100-10 5 5 0 000 10zM5 10a5 5 0 1110 0 5 5 0 01-10 0z" clip-rule="evenodd" />
                                </svg>
                                Usa control de versiones.
                            </dt>
                            <dd class="inline">Mantén un registro de cambios y versiones en tu código utilizando una herramienta de control de versiones como Git, esto te permitirá trabajar en equipo de manera eficiente y tener un historial de cambios.</dd>
                        </div>
                        <div class="relative pl-9">
                            <dt class="inline font-semibold text-gray-900">
                                <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 3a7 7 0 017 7v1a1 1 0 11-2 0v-1a5 5 0 00-5-5h-1a1 1 0 110-2h1zm0 4a3 3 0 100 6 3 3 0 000-6z" clip-rule="evenodd" />
                                </svg>
                                Documenta tu código.
                            </dt>
                            <dd class="inline">Agrega comentarios y documentación a tu código para que otros desarrolladores puedan entenderlo fácilmente y también te ayudará a recordar lo que hiciste en el futuro.</dd>
                        </div>
                  </div>
                </div>
                <img src="https://images.pexels.com/photos/6424583/pexels-photo-6424583.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[61rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
              </div>
            </div>
              </div>
         </div>
    </section>
  
      @include('Footer/Footer')
    </body>
</html>
