<x-guest-layout>
  <div class="font-sans bg-gray-100 flex flex-col 
	      justify-center h-screen" x-data="{ open: false}">
    <form
	class="bg-gray-800 p-8 m-20 rounded-lg"
	method="POST" action="{{ route('register') }}">
      @csrf
	<h2 class="text-4xl text-white font-bold text-center">
	    User Application
	</h2>
	<div class="w-full pt-4 p-2">
	<select class="block appearance-none w-full bg-white border border-gray-400 
		       hover:border-gray-500 p-2 rounded shadow leading-tight 
		       focus:outline-none focus:shadow-outline">
	  
	  <option @click="open=false; console.log(open);">Member Card</option>
	  <option @click="open=true; console.log(open);">Press Card</option>
	</select>
	<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 
		    text-gray-700">
	</div>
      </div>
      <div class="flex">
	<div class="flex flex-col text-gray-400 p-2 w-1/2">
	  <label>Name</label>
	  <input name="name"
		 class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
		       focus:bg-gray-800 focus:outline-none"
		 type="text"
		 placeholder="Jhon Doe"
	  />
	  <x-input-error :messages="$errors->get('name')" class="mt-2" />  
	</div>
	<div class="flex flex-col text-gray-400 p-2 w-1/2">
	  <label>Date Of Birth</label>
	  <input name="dob"
		 class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
		       focus:bg-gray-800 focus:outline-none"
		 type="date"
	  />
	  <x-input-error :messages="$errors->get('dob')" class="mt-2" />  
	</div>
	<div class="flex flex-col text-gray-400 p-2 w-1/2">
	    <label>Email</label>
	    <input name="email"
		   class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
			 focus:bg-gray-800 focus:outline-none"
		   type="email"
		   placeholder="example@example.com"
	    />
	    <x-input-error :messages="$errors->get('email')" class="mt-2" />
	</div>
      </div>
      <div class="flex">
	  <div class="flex flex-col text-gray-400 p-2 w-1/2">
	      <label>Password</label>
	      <input name="password"
		     class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
			   focus:bg-gray-800 focus:outline-none"
		     type="password"
	      />
	      <x-input-error :messages="$errors->get('email')" class="mt-2" />
	  </div>
	  <div class="flex flex-col text-gray-400 p-2 w-1/2">
	      <label>Confirm Password</label>
	      <input name=""
		     class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
			   focus:bg-gray-800 focus:outline-none"
		     type="password"
		     
	      />
	      <x-input-error :messages="$errors->get('phone')" class="mt-2" />
	  </div>
	  <div class="flex flex-col text-gray-400 p-2 w-1/2">
	      <label>Phone</label>
	      <input name="phone"
		     class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
			   focus:bg-gray-800 focus:outline-none"
		     type="tel"
		     pattern="[0-9]{11}"
		     placeholder="9122828383"
	      />
	      <x-input-error :messages="$errors->get('phone')" class="mt-2" />
	  </div>
      </div>
      <div class="flex">
	  <div class="flex flex-col text-gray-400 p-2 w-1/3">
	      <label>WhatsApp Phone</label>
	      <input name="phone"
		     class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
			   focus:bg-gray-800 focus:outline-none"
		     type="tel"
		     pattern="[0-9]{11}"
		     placeholder="9122828383"
	      />
	      <x-input-error :messages="$errors->get('phone')" class="mt-2" />
	  </div>
	  <div class="flex flex-col text-gray-400 p-2 w-1/3" x-show="open" x-clock>
	    <label>Father Name</label>
	    <input name="phone"
	    class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
			 focus:bg-gray-800 focus:outline-none"
	    type="text"
	    placeholder="Jhon Doy"
	    />
	    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
	  </div>
	  <div class="flex-grow p-2"  x-show="open" x-clock>
	    <label class="text-gray-400">Gender</label>
	    <select class="block appearance-none w-full bg-white border border-gray-400 
			   hover:border-gray-500 p-2 rounded shadow leading-tight 
			   focus:outline-none focus:shadow-outline mt-2">
	      <option>Select Gender</option>
	      <option>Male</option>
	      <option>Female</option>
	      <option>Other</option>
	    </select>
	  </div>
      </div>
      <div class="flex">
	<div class="flex-grow p-2"  x-show="open" x-clock>
	  <label class="text-gray-400">Qualification</label>
	  <select class="block appearance-none w-full bg-white border border-gray-400 
			 hover:border-gray-500 p-2 rounded shadow leading-tight 
			 focus:outline-none focus:shadow-outline mt-2">
	    <option>Select Qualification</option>
	    <option>10th</option>
	    <option>12th</option>
	  </select>
	</div>
	<div class="flex flex-col text-gray-400 p-2 w-1/2"  x-show="open" x-clock>
	  <label>Aadhar Number</label>
	  <input name="phone"
	  class="rounded-lg bg-gray-700 mt-2 p-2 focus:border-blue-500 
		       focus:bg-gray-800 focus:outline-none"
	  type="tel"
	  pattern="[0-9]{11}"
	  placeholder="12282838398"
	  />
	  <x-input-error :messages="$errors->get('phone')" class="mt-2" />
	</div>	
      </div>
      <div class="flex flex-col p-2 text-gray-400">
	  <label for="message" class="block mb-2 text-sm font-medium text-gray-400">
	      Address
	  </label>
	  <textarea id="message"
		    rows="3"
		    class="block p-2.5 w-full text-sm text-gray-900 
			bg-gray-50 rounded-lg border border-gray-300 
			focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 
			dark:border-gray-600 dark:placeholder-gray-400 
			dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
		    laceholder="Write your address here..."></textarea>

      </div>
      <div class="flex items-center">
	  <div class="flex-grow p-2 ">
	    <select class="block appearance-none w-full bg-white border border-gray-400 
			   hover:border-gray-500 p-2 rounded shadow leading-tight 
			   focus:outline-none focus:shadow-outline">
		  <option>Select State</option>
		 
	      </select>
	  </div>
	  <div class="flex-grow p-2">
	       <select class="block appearance-none w-full bg-white border border-gray-400 
			      hover:border-gray-500 p-2 rounded shadow leading-tight 
			      focus:outline-none focus:shadow-outline">
		   <option>Select District</option>
		  
	       </select>
	  </div>
	  <div class="flex flex-col text-gray-400 p-2 w-1/3">
	      <input name="name"
		     class="rounded-lg bg-gray-700 focus:border-blue-500 
			   focus:bg-gray-800 focus:outline-none"
		     type="text"
		     placeholder="Pin Code"
	      />
	      <x-input-error :messages="$errors->get('name')" class="mt-2" />  
	  </div>
      </div>
      <div class="flex">
	<div class="w-full p-2">	  
	  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">
	    Profile Picture
	  </label>
	  <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer 
			bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 
			dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

	</div>
	<div class="w-full p-2" x-show="open" x-clock>	  
	  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">
	    Marksheet Front
	  </label>
	  <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer 
			bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 
			dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

	</div>
      </div>
      <div class="flex items-center">
	<div class="flex-grow p-2"  x-show="open" x-clock>
	  <label class="text-white">ID Type</label>
	  <select class="block appearance-none w-full bg-white border border-gray-400 
			 hover:border-gray-500 p-2 rounded shadow leading-tight 
			 focus:outline-none focus:shadow-outline mt-2">
	    <option>Select Your ID</option>
	    <option value="Aadhar Card">Aadhar Card</option>
	    <option value="PAN Card">PAN Card</option>
	    <option value="Voter Card">Voter Card</option>
	    <option value="Driving Licence">Driving Licence</option>
	    <option value="Rashan Card">Rashan Card</option>
	  </select>
	</div>
	<div class="w-1/3 p-2" x-show="open" x-clock>	  
	  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">
	    ID Card Front
	  </label>
	  <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer 
			bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 
			dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

	</div>
	<div class="w-1/3 p-2" x-show="open" x-clock>	  
	  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">
	    ID Card Back
	  </label>
	  <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer 
			bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 
			dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

	</div>
      </div>
      <button class="w-full my-5 py-2 bg-teal-500 shadow-lg shadow-teal-500/50 
		     hover:shadow-teal-500/30 text-white font-semibold rounded-lg">
	{{ __('Register') }}
      </button>
    </form>
  </div>
</x-guest-layout>
