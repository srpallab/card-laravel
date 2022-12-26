<x-app-layout>
  
  <div class="flex flex-col mt-8 w-full">
    <div class="p-8 w-full">
      <div class="w-full flex justify-end">
	<button class="m-4 p-4 bg-green-700 hover:bg-green-600 rounded-lg text-white">
	  Create New Permission
	</button>
      </div>
      <div class="inline-block w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
        <table class="w-full">
          <thead>
            <tr>
              <th
              class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Name</th>
              <th
              class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Email</th>
              <th
              class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Status</th>
              <th
              class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Edit</th>
              <th
              class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Delete</th>
            </tr>
          </thead>

          <tbody class="bg-white">
	    @foreach($permissions as $permission)
              <tr>
		<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                  <div class="ml-4">
                    <div class="text-sm font-medium leading-5 text-gray-900">
                      John Doe
                    </div>
                  </div>
      </div>
		</td>

		<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                  <div class="text-sm leading-5 text-gray-500">john@example.com</div>
		</td>

		<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                  <span
                  class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
		</td>

		<td
		  class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                  </svg>
		</td>
		<td
		  class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
		</td>
              </tr>
	    @endforeach
          </tbody>
        </table>
    </div>
  </div>
  </div>
</x-app-layout>
