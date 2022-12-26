<x-app-layout>
  <x-sidebar></x-sidebar>
  <div class="flex space-x-4 mx-auto items-center w-3/4">
    <x-dashboard-card :number="3">Users</x-dashboard-card>
    <x-dashboard-card :number="3">Roles</x-dashboard-card>
    <x-dashboard-card :number="0">Permissions</x-dashboard-card>
    <x-dashboard-card :number="0">Forms</x-dashboard-card>
  </div>
</x-app-layout>
