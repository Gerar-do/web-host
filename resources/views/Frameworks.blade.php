<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="shortcut icon" href="{{ asset('302179864_590589979233604_6065662076440204313_n.ico') }}">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="shortcut icon" href="{{ asset('302179864_590589979233604_6065662076440204313_n.ico') }}">

        <title>Frameworks</title>

  
    </head>
    <body  >
      
      <header class="bg-dark">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
          <div class="flex lg:flex-1">
            <a href="{{ route('Home') }}" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img class="h-13 w-14 rounded-full" src="https://scontent.ftgz3-1.fna.fbcdn.net/v/t39.30808-6/302179864_590589979233604_6065662076440204313_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=6VdNJZveuqMAX92VWfx&_nc_ht=scontent.ftgz3-1.fna&oh=00_AfB7QO3A2eaP2KHngsLz9ckkUz0XNCYpMnIpkTZfPiDsoQ&oe=644C948D" alt="">
            </a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Open main menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
          <div class="hidden lg:flex lg:gap-x-12">
            
      
            <a href="#" class="text-sm font-semibold leading-6 text-gray-50">proximamente</a>
            <a href="{{ route('Home') }}" class="text-sm font-semibold leading-6 text-indigo-500"> <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
            </svg></a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-50">proximamente</a>
          </div>
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            
       <div class="dropdown">
        
        <button class=" bg-indigo-600 inline-block rounded-md  bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
         Temas de interes
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item text-indigo-900" href="{{ route('Frameworks') }}">Frameworks</a></li>
          <li><a class="dropdown-item text-indigo-900" href="#">Git-Hub</a></li>
          <li><a class="dropdown-item text-indigo-900" href="#">Frameworks CSS</a></li>
        </ul>
      </div>
          </div>
        </nav>
      </header>
      


    <!-- Informacion de los frameworks-->
<section>
    <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
      <div class="absolute inset-0 -z-10 overflow-hidden">
        <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
          <defs>
            <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
              <path d="M100 200V.5M.5 .5H200" fill="none" />
            </pattern>
          </defs>
          <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
            <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
          </svg>
          <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
        </svg>
      </div>
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
        <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
          <div class="lg:pr-4">
            <div class="lg:max-w-lg">
              <p class="text-base font-semibold leading-7 text-indigo-600">Información</p>
              <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Frameworks java script</h1>
              <p class="mt-6 text-xl leading-8 text-gray-700">Los Frameworks de JavaScript son muy populares en el desarrollo web debido a su capacidad para simplificar el proceso de desarrollo y mejorar la eficiencia del equipo de desarrollo. Algunos ejemplos de Frameworks de JavaScript populares incluyen Angular, React, Vue.js, Ember.js, Backbone.js, entre otros.</p>
            </div>
          </div>
        </div>
        <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
          <img class="w-[42rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[40rem]" src="https://images.pexels.com/photos/5926370/pexels-photo-5926370.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
        </div>

        <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
          <div class="lg:pr-4">
            <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
              <p>Cada Framework tiene sus propias características, ventajas y desventajas, por lo que es importante seleccionar el Framework adecuado según las necesidades de tu proyecto. Algunos Frameworks son ideales para aplicaciones grandes y complejas, mientras que otros son más adecuados para proyectos más pequeños y simples.</p>
            
              
              <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">De los frameworks de JavaScript mencionados anteriormente, Angular y React son dos de los frameworks más utilizados en la actualidad.</h2>
              <p class="mt-8">Angular es un framework de JavaScript muy popular desarrollado por Google. Es utilizado para desarrollar aplicaciones web de una sola página (SPA) y es altamente escalable y modular. Angular es ampliamente utilizado por grandes empresas y organizaciones, ya que es compatible con varios lenguajes de programación y proporciona una amplia gama de herramientas y recursos.</p>
             
              <p class="mt-6">React, por otro lado, es un framework de JavaScript desarrollado por Facebook. Es utilizado para crear interfaces de usuario interactivas y dinámicas. React es muy popular debido a su enfoque en el rendimiento, la escalabilidad y la facilidad de uso. También cuenta con una amplia gama de herramientas y recursos que facilitan el desarrollo de aplicaciones web.</p>
            </div>
          </div>
        </div>
      </div>

      <br>

 
    </div>
   
  </section>

  
  @include('Footer/Footer')





         
              
    </body>
</html>
