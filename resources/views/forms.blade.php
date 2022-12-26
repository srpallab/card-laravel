<x-guest-layout>
  <div class="font-sans bg-gray-800 flex flex-col justify-center h-screen">
    <form
    class="w-2/3 mx-auto bg-gray-900 p-8 px-8 rounded-lg"
    method="POST" action="{{ route('register') }}"
    >
      @csrf
      <h2 class="text-4xl text-white font-bold text-center">User Application</h2>
      <div class="w-full pt-4">
	<select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
	  <option>Select Card Type</option>
	  <option>Member Card</option>
	  <option>Press Card</option>
	</select>
	<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 
		    text-gray-700">
	</div>
      </div>
      <div class="flex">
	<div class="flex flex-col text-gray-400 p-2 w-1/2">
	  <label htmlFor="">Name</label>
	  <input name="name" class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
		       focus:bg-gray-800 focus:outline-none" type="text" />
	  <x-input-error :messages="$errors->get('name')" class="mt-2" />  
	</div>
	<div class="flex flex-col text-gray-400 p-2 w-1/2">
	  <label htmlFor="">Date Of Birth</label>
	  <input name="name" class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
		       focus:bg-gray-800 focus:outline-none" type="date" />
	  <x-input-error :messages="$errors->get('name')" class="mt-2" />  
	</div>
      </div>
      <div class="flex flex-col text-gray-400 py-2 w-1/2">
	<label htmlFor="">Email</label>
	<input name="email" class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
		     focus:bg-gray-800 focus:outline-none" type="email" value="" />
	<x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <button class="w-full my-5 py-2 bg-teal-500 shadow-lg shadow-teal-500/50 
		     hover:shadow-teal-500/30 text-white font-semibold rounded-lg">
	{{ __('Register') }}
      </button>
    </form>
  </div>
</x-guest-layout>
