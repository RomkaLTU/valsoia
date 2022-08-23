@extends('layouts.app')

@php
$colors = get_field('colors');
$products = get_field('related_products');
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
        @include('svg.bg-almond')
      @elseif($colors === 'pistachio')
        @include('svg.bg-pistachio')
      @elseif($colors === 'croccantino')
        @include('svg.bg-croccantino')
      @elseif($colors === 'chocolate')
        @include('svg.bg-chocolate')
      @elseif($colors === 'spread')
        @include('svg.bg-related-espresso')
      @else
        @include('svg.bg-related-espresso')
      @endif

      <div class="absolute top-0 w-full h-full">
        @if(isset($products) && $products)
          <div class="sm:w-[95%] max-w-[1557px] mx-auto sm:px-4 h-full text-white md:flex md:flex-col md:items-center justify-center px-4 lg:px-0">
            <h4 class="uppercase font-ga text-center mt-[16vw] md:mt-0 mb-[3vw] left-0 right-0 mx-auto text-4xl xl:text-5xl">
              {{ __('TRY THESE TOO', 'code') }}
            </h4>
            <div class="single-product-slider mt-16 md:mt-0">
              @include('partials.product-slider')
            </div>
          </div>
        @endif
      </div>
    </div>
  @endwhile
@endsection
