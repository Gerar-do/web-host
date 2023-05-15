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
              <p class="mt-14 text-xl text-gray-500">A programming web blog is a website that provides informative and educational articles on various aspects of web development, primarily aimed at a programming  audience Front-end.</p>
            </div>
            
            
              <div class="mt-14">
              
      
                <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">proximamente</a>
            
              </div>
        
           
             
              </div>
              <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                <div class="sm:max-w-lg">
                  <h1 class="font text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl mt-20">web programming </h1>
                </div>
                
               
               
                 
                  </div>
          </div>
        </div>
  
  @include("Docs/Info_Docs")
      @include('Footer/Footer')
    </body>
</html>
