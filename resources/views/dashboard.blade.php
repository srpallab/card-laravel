<?php
$users = "Users";
$roles = "Roles";
$permissions = "Permissions";
$forms = "Forms";
?>
<x-app-layout>
  <div class="flex space-x-4 items-center h-full px-8">

    <x-dashboard-card
    class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600"
    :number="3" :title="$users">
      <div class="flex-shrink pr-4">
        <div class="rounded-full p-5 bg-green-600">
	  <i class="fa fa-user fa-2x fa-inverse"></i>
	</div>
      </div>
    </x-dashboard-card>

    <x-dashboard-card
    class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500"
    :number="3" :title="$roles">
      <div class="flex-shrink pr-4">
	<div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
      </div>      
    </x-dashboard-card>
    
    <x-dashboard-card
    class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600"
    :number="0" :title="$permissions">
      <div class="flex-shrink pr-4">
        <div class="rounded-full p-5 bg-yellow-600">
	  <i class="fas fa-user-plus fa-2x fa-inverse"></i>
	</div>
      </div>
    </x-dashboard-card>

    <x-dashboard-card
    class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500"
    :number="0" :title="$forms">
      <div class="flex-shrink pr-4">
        <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>
      </div>
    </x-dashboard-card>
  </div>
</x-app-layout>
