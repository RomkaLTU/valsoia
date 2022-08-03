@extends('layouts.app')

@php
$colors = get_field('colors');
$relatedProducts = get_field('related_products');

dump($colors);
@endphp

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="w-full max-w-[1520px] mx-auto">
      @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
    </div>

    <div class="relative">
      @if($colors === 'espresso')
        @include('svg.bg-related-espresso')
      @elseif($colors === 'almond')
        @include('svg.bg-related-espresso')
      @elseif($colors === 'pistachio')
        @include('svg.bg-related-espresso')
      @elseif($colors === 'croccantino')
        @include('svg.bg-related-espresso')
      @elseif($colors === 'chocolate')
        @include('svg.bg-related-espresso')
      @elseif($colors === 'spread')
        @include('svg.bg-related-espresso')
      @else
        @include('svg.bg-related-espresso')
      @endif

      <div class="absolute top-0 w-full h-full">
        @if(isset($relatedProducts) && $relatedProducts)
          <div class="glider-products-container sm:w-[95%] max-w-[1557px] mx-auto sm:px-4 h-full text-white">
            <h4 class="absolute uppercase font-ga text-center mt-[8vw] sm:mt-[6vw] 2xl:mt-[8vw] left-0 right-0 mx-auto text-4xl xl:text-5xl">
              {{ __('TRY THESE TOO', 'code') }}
            </h4>
            <div class="glider-products font-ga text-3xl h-full mt-[3vw] flex items-center justify-center">
              @foreach($relatedProducts as $product)
                <a href="{{ get_permalink($product) }}" class="flex flex-col gap-6 items-center">
                  {!! get_the_post_thumbnail($product, 'large', ['class' => 'w-full h-full object-contain']) !!}
                  <h3 class="text-center">{{ $product->post_title }}</h3>
                </a>
              @endforeach
            </div>
            <button aria-label="Previous" class="glider-prev !mb-0">
              <img class="w-[57px]" src="@asset('images/slider-left@2x.webp')" alt="">
            </button>
            <button aria-label="Next" class="glider-next !mb-0">
              <img class="w-[57px]" src="@asset('images/slider-right@2x.webp')" alt="">
            </button>
          </div>
        @endif
      </div>
    </div>
  @endwhile
@endsection
