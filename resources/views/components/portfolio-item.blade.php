<div
  x-data="{categories: {{ json_encode($categories) }} }"
  :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden' "
  class="w-full md:w-1/2 xl:w-1/3 px-4"
>
  <div class="relative mb-12">
    <a href="{{$github}}" target="_blank">
      <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105">
        <img
          src="{{ $image }}"
          alt="portfolio"
          class="w-full h-[150px] object-cover"
        />
      </div>
    </a>
    <div
      class="text-center bg-white dark:bg-gray-800 relative z-10 py-5 px-1 rounded-lg shadow-lg mx-10 -mt-4 h-[180px]">
      <span class="text-sm text-primary font-semibold block mb-2">
        {{ implode(", ", $categories) }}
      </span>
      <h3 class="font-bold text-lg text-dark dark:text-gray-300 mb-4">
        {{ $title }}
      </h3>
      <x-button-link :href="$github" variant="outline-primary">+ detalhes</x-button-link>
    </div>
  </div>
</div>
