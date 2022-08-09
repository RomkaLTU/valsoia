@extends('layouts.app')

@php
$next = get_next_post();
@endphp

@section('content')
  @while(have_posts()) @php(the_post())
    <figure>
      <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'full') }}" class="w-full" alt="">
    </figure>
    <header>
      <h1 class="font-ga text-3xl lg:text-6xl block max-w-[940px] text-center mx-auto mt-10 mb-10">
        @php(the_title())
      </h1>
    </header>
    <div>
      @php(the_content())

      <div class="w-full max-w-[1200px] flex justify-end mb-10 lg:mb-40 px-4">
        @if($next)
          <div>
            <a href="{{ get_permalink($next) }}" class="font-ga flex flex-col">
              <span class="text-3xl">{{ __('Next article', 'code') }}:</span>
              <span class="text-xl">{{ $next->post_title }}</span>
            </a>
          </div>
        @endif
      </div>

      <section class="bg-yellow-1 min-h-[700px] pt-20 pb-32">
        <img src="@asset('images/shape-1.webp')" class="w-full -mt-20" alt="" />
        <h2 class="font-ga text-45px leading-12 lg:text-6xl text-center mb-10 sm:mb-16 mt-6 lg:mt-0 px-16 lg:px-0">
          {{ __('Our products', 'code') }}
        </h2>
        @include('partials.hero-products')
      </section>
    </div>
  @endwhile
@endsection
