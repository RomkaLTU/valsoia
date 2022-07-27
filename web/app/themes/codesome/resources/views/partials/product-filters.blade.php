<div x-data="{show: false}" :class="[show ? '' : '-ml-[75vw] sm:-ml-[35vw] lg:ml-0']" class="absolute transition-all z-20 bg-white left-0 top-0 bg-whtie rounded-br-[50px] lg:rounded-r-[50px] p-4 py-6 sm:p-8 shadow-md shadow-yellow-2 w-[75vw] sm:w-[35vw] lg:w-[27vw] sm:max-w-[470px] font-ga">
  <div class="flex flex-col space-y-4 sm:space-y-8">
    @foreach(get_terms(['taxonomy' => 'product_categories', 'hide_empty' => false]) as $term)
      <a href="{{ get_term_link($term) }}" class="relative flex items-center gap-6">
      @if(get_queried_object()->slug === $term->slug)
        <img src="@asset('images/filters-shape@2x.webp')" class="absolute left-0 w-20 sm:w-[115px]" alt="">
      @endif
      <span class="relative w-16 sm:w-[110px] flex items-center justify-center">
        <img src="{{ wp_get_attachment_image_url(get_field('icon', $term), 'large') }}" class="h-[58px]" alt="" />
      </span>
      <span class="relative flex-none text-xl">
        {{ $term->name }}
      </span>
    </a>
    @endforeach
  </div>
  <div class="2xl:ml-[124px] mt-8 sm:mt-12">
    <div class="ml-2.5">
      {{ __('Filters', 'code') }}
    </div>
    <div class="grid grid-cols-3 items-start gap-4 mt-2">
      <a href="#" class="flex flex-col justify-center items-center">
        <img src="@asset('images/glutten-free-icon@2x.webp')" class="w-[58px]" alt="">
        <span class="text-xs sm:text-base text-center leading-tight mt-2">Gluten - free</span>
      </a>
      <a href="#" class="flex flex-col justify-center items-center">
        <img src="@asset('images/almond@2x.webp')" class="w-[58px]" alt="">
        <span class="text-xs sm:text-base text-center leading-tight mt-2">Made With Almond</span>
      </a>
      <a href="#" class="flex flex-col justify-center items-center">
        <img src="@asset('images/oat@2x.webp')" class="w-[58px]" alt="">
        <span class="text-xs sm:text-base text-center leading-tight mt-2">Made With<br> Oat</span>
      </a>
    </div>
  </div>
  <button @click="show = !show" type="button" class="lg:hidden absolute top-0 right-0 w-20 h-16 bg-white rounded-r-[50px] flex items-center justify-center -mr-[5rem]">
    <span class="rounded-full w-8 h-8 p-1 bg-yellow-1">
      <img src="@asset('images/002-hazelnut@2x.webp')" alt="" />
    </span>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
    </svg>
  </button>
</div>
