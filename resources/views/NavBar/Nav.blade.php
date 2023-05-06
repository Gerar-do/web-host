<header class="bg-dark ">
  <nav class="mx-auto flex max-w-5xl items-center justify-between p-3 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="{{ route('Home') }}" class="-m-1.5 p-1.5">
        <span class="sr-only ">Your Company</span>
        <img class="h-13 w-14 rounded-full" src="https://scontent.ftgz3-1.fna.fbcdn.net/v/t39.30808-6/302179864_590589979233604_6065662076440204313_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=6VdNJZveuqMAX92VWfx&_nc_ht=scontent.ftgz3-1.fna&oh=00_AfB7QO3A2eaP2KHngsLz9ckkUz0XNCYpMnIpkTZfPiDsoQ&oe=644C948D" alt="">
      </a>
    </div>

    <div class="hidden lg:flex lg:gap-x-12">
    

      <a href="#" class="inline-flex w-full justify-centerpx-3 py-2 text-sm font-semibold text-gray-50 sm:ml-3 sm:w-auto ">Proximamente</a>
      <a href="{{ route('Home') }}" class=" leading-6 text-xl text-cyan-300 font-bold  inline-flex w-full sm:ml-3 sm:w-auto px-3 py-2   hover:text-gray-50">
        
        FalCode Blog</a>
      <a href="#" class="inline-flex w-full justify-centerpx-3 py-2 text-sm font-semibold text-gray-50  sm:ml-3 sm:w-auto "">Proximamente</a>
    </div>
    
    
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
  </nav>
 
</header>
