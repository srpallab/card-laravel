@props(['number', 'title'])
<div class="w-full">
  <div {{ $attributes->merge(['class' => 'rounded-lg shadow-xl p-5']) }}>
    <div class="flex flex-row items-center">
      {{ $slot }}
      <div class="flex-1 text-right md:text-center">
	<h2 class="font-bold uppercase text-gray-600">{{ $title }}</h2>
	<p class="font-bold text-3xl">
	  {{ $number ?? 0 }}
	</p>
      </div>
    </div>
  </div>
</div>
