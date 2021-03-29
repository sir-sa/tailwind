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
    <body class="antialiased text-gray-800">
      <header style="background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/max_632/a112be106685189.5f95dab934db1.jpg');" class="md:relative bg-no-repeate bg-cover lg:bg-center p-6 bg-top-right">

        <div class="md:max-w-5xl max-auto lg:py-32 py-2">
          <h2 class="lg:text-5xl text-4xl font-semibold text-black-900 leading-none mb-4">Book a trip Host Games. All in Manchester</h2>
          <div class="flex items-center flex-wrap justify-start max-w-2xl lg:mx-0 mx-auto">
            <div class="lg:pr-5 w-full lg:w-1/2 mb-4 lg:mb-0">
              <p class="text-black-900 mb-2 tracking-wide">
                PREMIER LEAGUE
              </p>
              <a href="#" class="transition ease-in duration-150 bg-white pc-10 py-3 rounded font-bold hover:bg-gray-300 block w-full text-center borfer-2 border-white">Explore</a>
            </div>
             <div class="lg:pl-5 w-full lg:w-1/2 mb-4">
              <p class="text-black-900 mb-2 tracking-wide">
                EARN MONEY FROM EXTRA SPACE
              </p>
              <a href="#" class="transition ease-in duration-150 bg-white pc-10 py-3 rounded font-bold hover:bg-gray-300 block w-full text-center borfer-2 border-white">HOST</a>
            </div>
          </div>
        </div>
        
      </header>


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
