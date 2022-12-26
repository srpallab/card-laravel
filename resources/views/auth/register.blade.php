<x-guest-layout>

  <div class="grid grid-cols-1 sm:grid-cols-2 h-screen w-full">
    <div class="hidden sm:block">
      <img
      class="w-full h-full object-cover"
      alt="Login Image"
      src="{{ asset('images/login.jpg') }}"
      />
    </div>
    <div class="bg-gray-800 flex flex-col justify-center">
      <form class="max-w-[400px] w-full mx-auto bg-gray-900 p-8 px-8 rounded-lg"
      method="POST"
      action="{{ route('register') }}">

	@csrf
	<h2 class="text-4xl text-white font-bold text-center">
	  REGISTER
	</h2>
	
	<div class="flex flex-col text-gray-400 py-2">
	  <label htmlFor="">Name</label>
	  <input name="name" class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
		       focus:bg-gray-800 focus:outline-none" type="text" />
	  <x-input-error :messages="$errors->get('name')" class="mt-2" />  
	</div>
	<div class="flex flex-col text-gray-400 py-2">
	  <label htmlFor="">Email</label>
	  <input name="email" class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
		       focus:bg-gray-800 focus:outline-none" type="email" value="" />
	  <x-input-error :messages="$errors->get('email')" class="mt-2" />
	</div>
	<div class="flex flex-col text-gray-400 py-2">
	  <label htmlFor="">Password</label>
	  <input
	  name="password"
	  class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 focus:bg-gray-800 
		focus:outline-none"
	  type="password"
	  value=""
	  />
	  <x-input-error :messages="$errors->get('password')" class="mt-2" />
	</div>
	<div class="flex flex-col text-gray-400 py-2">
	  <label htmlFor="">Confirm Password</label>
	  <input
	  name="password_confirmation"
	  class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 focus:bg-gray-800 
		focus:outline-none"
	  type="password"
	  
	  />
	  <x-input-error :messages="$errors->get('password')" class="mt-2" />
	</div>

	<button class="w-full my-5 py-2 bg-teal-500 shadow-lg shadow-teal-500/50 
		       hover:shadow-teal-500/30 text-white font-semibold rounded-lg">
	  {{ __('Register') }}
	</button>
	<p class="text-center text-white">
	  {{ __('Already registered?') }}
	  <a href="{{ route('login') }}" class="ml-2 text-blue-500">Sign In</a>
	</p>
      </form>
    </div>
  </div>
</x-guest-layout>
