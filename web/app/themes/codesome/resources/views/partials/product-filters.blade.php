<div x-data="{show: false}"
     :class="[show ? '' : '-ml-[75vw]']"
     class="fixed lg:hidden top-0 left-0 mt-72 transition-all z-20 bg-white left-0 top-0 bg-whtie rounded-br-[50px] font-ga" style="box-shadow: 0 5px 20px #C2790059;">
  <div
    class="p-4 py-6 sm:p-8 w-[75vw] z-20 bg-white relative rounded-br-[50px]">
    <div class="flex flex-col space-y-4 sm:space-y-8">
      @foreach(get_terms(['taxonomy' => 'product_categories', 'hide_empty' => false]) as $term)
        <a href="{{ get_term_link($term) }}" class="relative flex items-center gap-6">
          @if(get_queried_object()->slug === $term->slug || get_queried_object()->taxonomy === 'product_options')
            <img src="@asset('images/filters-shape@2x.webp')" class="absolute left-0 w-20 sm:w-[115px]" alt="">
          @endif
          <span class="relative flex-none w-16 sm:w-[110px] flex items-center justify-center">
            <img src="{{ wp_get_attachment_image_url(get_field('icon', $term), 'large') }}" class="h-[42px]" alt="" />
          </span>
          <span class="relative flex-none lg:text-xl">
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
        @foreach(get_terms(['taxonomy' => 'product_options', 'hide_empty' => false]) as $term)
          <a href="{{ get_term_link($term) }}" class="flex flex-col justify-center items-center">
            <img src="{{ wp_get_attachment_image_url(get_field('icon', $term), 'large') }}" class="w-[58px]" alt="">
            <span class="relative text-center mt-2">
              @if(get_queried_object()->slug === $term->slug)
                <img src="@asset('images/options-bg.webp')" class="absolute left-0 w-20 sm:w-[115px]" alt="">
              @endif
              <span class="relative block text-xs sm:text-base sm:leading-tight">{{ $term->name }}</span>
            </span>
          </a>
        @endforeach
      </div>
    </div>
  </div>
  <button
    @click="show = !show"
    type="button"
    class="lg:hidden absolute top-0 right-0 w-20 h-16 bg-white rounded-r-[50px] flex items-center justify-center -mr-[5rem]" style="box-shadow: 0 5px 20px #c2790059;">
      <span class="rounded-full w-8 h-8 p-1 bg-yellow-1 flex items-center justify-center">
        <img src="{{ wp_get_attachment_image_url(get_field('icon', get_queried_object()), 'large') }}" class="max-h-full" alt="" />
      </span>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
    </svg>
  </button>
</div>

<div
  x-data="{show: false}"
  :class="[show ? '' : '-ml-[75vw] sm:-ml-[35vw] lg:ml-0']"
  class="hidden lg:block absolute transition-all xl:transition-none z-20 bg-white left-0 top-0 bg-whtie rounded-br-[50px] lg:rounded-r-[50px] p-4 py-6 sm:p-8 w-[75vw] sm:w-[35vw] lg:w-[27vw] sm:max-w-[470px] font-ga" style="box-shadow: 0 5px 20px #C2790059;">
  <div class="flex flex-col space-y-4 sm:space-y-8">
    @foreach(get_terms(['taxonomy' => 'product_categories', 'hide_empty' => false]) as $term)
      <a href="{{ get_term_link($term) }}" class="relative flex items-center gap-6">
        @if(get_queried_object()->slug === $term->slug || get_queried_object()->taxonomy === 'product_options')
          <img src="@asset('images/filters-shape@2x.webp')" class="absolute left-0 w-20 sm:w-[115px]" alt="">
        @endif
        <span class="relative flex-none w-16 sm:w-[110px] flex items-center justify-center">
          <img src="{{ wp_get_attachment_image_url(get_field('icon', $term), 'large') }}" class="h-[42px]" alt="" />
        </span>
        <span class="relative flex-none lg:text-xl">
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
      @foreach(get_terms(['taxonomy' => 'product_options', 'hide_empty' => false]) as $term)
        <a href="{{ get_term_link($term) }}" class="flex flex-col justify-center items-center">
          <img src="{{ wp_get_attachment_image_url(get_field('icon', $term), 'large') }}" class="w-[58px]" alt="">
          <span class="relative text-center mt-2">
            @if(get_queried_object()->slug === $term->slug)
              <img src="@asset('images/options-bg.webp')" class="absolute left-0 w-20 sm:w-[115px]" alt="">
            @endif
            <span class="relative block text-xs sm:text-base sm:leading-tight">{{ $term->name }}</span>
          </span>
        </a>
      @endforeach
    </div>
  </div>
  <button @click="show = !show" type="button" class="lg:hidden absolute top-0 right-0 w-20 h-16 bg-white rounded-r-[50px] flex items-center justify-center -mr-[5rem]">
    <span class="rounded-full w-8 h-8 p-1 bg-yellow-1 flex items-center justify-center">
      <img src="{{ wp_get_attachment_image_url(get_field('icon', get_queried_object()), 'large') }}" class="max-h-full" alt="" />
    </span>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
    </svg>
  </button>
</div>
