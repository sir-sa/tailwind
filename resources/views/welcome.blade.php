<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

        <!-- Fonts -->
       <!--  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
 -->
      

    </head>
    <body class="antialiased">
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

  
        </div>

        <div class="p28 min-h-screen flex flex-wrap justify-center items-center bg-gray-200 gap-8">
            <section class="m-2 font-sans leading-normal flex">
                <div class="bg-white max-w-lg shadow-xl overflow hidden m-4 sm:flex">
                    <div class="px-6 py-4 text-center">
                        <h2 class="mb-4 font-black">Tailwind Css 2.0.1</h2>
                        <p class="mb-4 text-gray-dark text-sm">
                            Learning tailwind css is incredible easiy
                        </p>
                    </div>
                </div>
            </section>
        </div> -->

        <div class="bg-indigo-500 p-4 flex justify-between items-center">
            <!-- left side -->
            <div class="flex items-center">
                <img src="{{asset('images/logo.png')}}" width="50" alt="logo" class="mr-8">
                <a href="#" class="inline-block p-2 text-indigo-200 hover:text-indigo-100 mmr-2">Home</a>
                <a href="#" class="inline-block p-2 text-indigo-200 hover:text-indigo-100 mmr-2">About</a>
            </div>

           <!--  right side -->
           <div class="hidden md:block">
               <a href="#" class="inline-block p-2 text-indigo-200 mr-2 hover:text-indigo-100">Sign in</a>
               <a href="#" class="inline-block p-2 px-4 text-yellow-700 bg-yellow-400 hover:bg-yellow-300 hover:text-yellow-800 rounded transition ease-in duration-150">Sign Up</a>
           </div>
            
        </div>

        <!-- hero section -->
        <div class="md:flex justify-between py-20 px-10 bg-indigo-600 text-indigo-100">
            <!-- left side -->
            <div class="w-1/2 mb-10 md:mb-0">
                <h2 class=" text-2xl mid:text-4xl lg:text6xl text-white mb-6">Welcome to Sammy city</h2>
                <p class="mb-6">There is never sad day here!</p>

                <a href="#" class="inline-block py-3 px-6 text-lg bg-gray-400 text-gray-800 hover:bg-gray-300 rounded mr-2 mb-6">Learn more</a>
                <a href="#" class="inline-block py-3 px-6 text-lg bg-yellow-400 text-yellow-800 hover:bg-yellow-300 rounded">Get started</a>
            </div>

            <!-- right side -->
            <div class="w-1/2 " >
                <img src="https://images.unsplash.com/photo-1505250469679-203ad9ced0cb?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mjh8fGZvb3RiYWxsfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-full rounded shadow-2xl">
            </div>

        </div>


      <!--   features section -->
        <div class="md:flex py-16 px-10 bg-indigo-800 text-indigo-200 text-center">
          <div class="mr-2 mt-8 text-center">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKNkEIwHj4QxwpxR9mo51Seaqs19gtJM9qcQ&usqp=CAU" width="w-full mr-2 mb-4 rounded border-solid border-2 border-yellow-400">
              <p>Manchester United players Paul Pogba </p>
          </div>
          <div class="mr-2 mt-8 text-center">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPJv58aJQh48pQqu4VisfojH0sJVjkrAfGAg&usqp=CAU" width="w-full mr-2 mb-4 rounded border-solid border-2 border-indigo-400">
              <p>Ole Gunnar Solskjaer: Paul Pogba Is Man United's Player,</p>
          </div>
          <div class="mr-2 mt-8 text-center">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg3Benchgt5WW2lpCDoNCzrYEjGY3GTWLktg&usqp=CAU" width="w-full mr-2 mb-4 rounded border-solid border-2 border-indigo-400">
              <p>Greenwood picks out the two funniest Manchester United players</p>
          </div>
          <div class="mr-2 mt-8 text-center">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLr0ixrH-5tGp9eN3HnfBpxBXi62_6eEdobA&usqp=CAU" width="w-full mr-2 mb-4 rounded border-solid border-2 border-indigo-400">
              <p> Cristiano Ronaldo</p>
          </div>
        </div>

       <!--  footer section -->
       <div class="flex justify-between p-10 bg-indigo-900 text-indigo-400">
        <!-- left side -->
           <div class="md:w-1/2">
               <h3 class="text-lg mb-2">Join the Newsletter</h3>
               <form class="flex">
                   <input type="email" name="" class="w-full rounded-l py-3 px-4 outline-none focus:bg-indigo-200">
                   <button class="bg-red-300 text-red-800 rounded-r px-4">Join</button>
               </form>
           </div>
           <!-- right side -->
           <div>
               Copyright &copy; sammy 2021 - manchester united
           </div>
       </div>
       
    </body>
</html>
