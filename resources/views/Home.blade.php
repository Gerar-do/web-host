<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="shortcut icon" href="{{ asset('302179864_590589979233604_6065662076440204313_n.ico') }}">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     

        <title>Home Blog</title>

  
    </head>
    <body  class="bg-white">
      
        @include('NavBar/Nav')
<br>

          @include('Docs/Info_Docs')

         
         
            <div class="overflow-hidden bg-neutral-50 py-12 sm:py-12">
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
                    <img src="https://images.pexels.com/photos/6424583/pexels-photo-6424583.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
                  </div>
                </div>
              </div>
            
              <div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:max-w-4xl">
                        <img class="mx-auto h-12" src="https://tailwindui.com/img/logos/workcation-logo-indigo-600.svg" alt="">
                        <figure class="mt-10">
                          <blockquote class="text-center text-xl font-semibold leading-8 text-gray-50 sm:text-2xl sm:leading-9">
                            <p>"Un buen programador es alguien que siempre busca formas de hacer las cosas más fáciles y eficientes para los demás". - Bill Gates.</p>
                          </blockquote>
                          <figcaption class="mt-10">
                            <img class="mx-auto h-10 w-10 rounded-full" src="https://scontent.ftgz3-1.fna.fbcdn.net/v/t39.30808-6/302179864_590589979233604_6065662076440204313_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=6VdNJZveuqMAX92VWfx&_nc_ht=scontent.ftgz3-1.fna&oh=00_AfB7QO3A2eaP2KHngsLz9ckkUz0XNCYpMnIpkTZfPiDsoQ&oe=644C948D" alt="">
                            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                              <div class="font-semibold text-sky-400">Jafet T.C</div>
                              <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-500">
                                <circle cx="1" cy="1" r="1" />
                              </svg>
                              <div class="text-gray-50">Fundador</div>
                            </div>
                          </figcaption>
                        </figure>
                        <p tabindex="0" class="focus:outline-none mt-6 text-xs lg:text-sm leading-none text-gray-900 dark:text-gray-50 text-center">2023 FalCode IDS . All Rights Reserved.</p>

                      </div>
                <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
                  <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
              </div>

              </div>

              
   

    </body>
</html>
