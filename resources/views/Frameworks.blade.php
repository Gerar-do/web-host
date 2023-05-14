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


<style>
  .text-titulo1{
  font-family: 'Courgette', cursive;
}
.custom-toggler .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgb(255,255,255)' stroke-width='3' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

</style>

    </head>
    <body  >
      
   @include('NavBar/Nav')
      


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
