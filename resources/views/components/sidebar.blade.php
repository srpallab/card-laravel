<div
@click.away="open = false"
class="flex flex-col w-full md:w-64 text-white bg-gray-800 flex-shrink-0 h-screen"
x-data="{ open: false }"
>
  <div class="flex-shrink-0 px-8 py-4 mt-16 flex flex-row items-center justify-between">
    <a href="#" class="text-lg font-semibold tracking-widest uppercase 
	     rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
      Dashboard
    </a>
    <button
    class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline"
    @click="open = !open">
      <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
        <path
	x-show="!open"
		fill-rule="evenodd"
		d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 
		2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
		clip-rule="evenodd">
	</path>
	<path
	x-show="open"
		fill-rule="evenodd"
		d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 
		10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 
		01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
		clip-rule="evenodd">
	  
	</path>
      </svg>
    </button>
    </div>
    <nav
    :class="{'block': open, 'hidden': !open}"
    class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
      
      @role('admin')
	<x-sidebar-menu href="{{ route('dashboard.index') }}" >
	    Dashboard
	</x-sidebar-menu>
	<x-sidebar-menu href="{{ route('users.index') }}">
	    Users
	</x-sidebar-menu>
	<x-sidebar-menu href="{{ route('roles.index') }}">
	    Roles
	</x-sidebar-menu>
      @endrole
      @role('superadmin')
	<x-sidebar-menu href="{{ route('permissions.index') }}">
	    Permissions
	</x-sidebar-menu>
      @endrole
	<x-sidebar-menu href="{{ route('forms.index') }}">
	    Application Form
	</x-sidebar-menu>
    
	<div @click.away="open = false"
	     class="relative"
	     x-data="{ open: false }">
      </div>
    </nav>
</div>
