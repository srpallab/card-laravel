<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Card') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
    href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/fc813874b8.js" crossorigin="anonymous"></script>
  </head>
  <body class="font-sans antialiased">
    <div class="min-h-screen flex" style="background-color: rgba(239,246,255,1);">
      <x-sidebar></x-sidebar>
      <main class="flex flex-col w-full">
	<nav class="bg-white h-16 shadow bg-gray-800">
	  
	  <div class="flex w-full pt-2 content-center justify-between md:justify-end">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
	      <li class="md:mr-3 text-blueGray-100 text-xl">
		<i class="fa-regular fa-bell"></i>
	      </li>
              <li class="flex-1 md:flex-none md:mr-3">
                <div class="relative inline-block">
                  <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-2 px-2"> <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, {{ auth()->user()->name }} <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                  <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-1 p-3 overflow-auto z-30 invisible">
                    <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                    <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-cog fa-fw"></i> Settings</a>
                    <div class="border border-gray-800"></div>
		      <form method="POST" action="{{ route('logout') }}">
        @csrf
			<a class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"   href="route('logout')"
				  onclick="event.preventDefault(); this.closest('form').submit();">
			  <i class="fas fa-sign-out-alt fa-fw"></i> {{ __('Log Out') }}
			</a>
		      </form>
		      
                  </div>
                </div>
              </li>
            </ul>
          </div>
	</nav>
        {{ $slot }}
	<footer class="bg-white text-center lg:text-left">
	  <div class="text-gray-700 text-center p-4">
	    © 2021 Copyright:
	  </div>
	</footer>
      </main>
    </div>
    <script>
     /*Toggle dropdown list*/
     function toggleDD(myDropMenu) {
       document.getElementById(myDropMenu).classList.toggle("invisible");
     }
     /*Filter dropdown options*/
     function filterDD(myDropMenu, myDropMenuSearch) {
       var input, filter, ul, li, a, i;
       input = document.getElementById(myDropMenuSearch);
       filter = input.value.toUpperCase();
       div = document.getElementById(myDropMenu);
       a = div.getElementsByTagName("a");
       for (i = 0; i < a.length; i++) {
         if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
           a[i].style.display = "";
         } else {
           a[i].style.display = "none";
         }
       }
     }
     // Close the dropdown menu if the user clicks outside of it
     window.onclick = function(event) {
       if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
         var dropdowns = document.getElementsByClassName("dropdownlist");
         for (var i = 0; i < dropdowns.length; i++) {
           var openDropdown = dropdowns[i];
           if (!openDropdown.classList.contains('invisible')) {
             openDropdown.classList.add('invisible');
           }
         }
       }
     }
    </script>
  </body>
</html>
