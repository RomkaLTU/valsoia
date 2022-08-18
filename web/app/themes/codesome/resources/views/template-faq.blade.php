{{--
  Template Name: FAQ
--}}

@extends('layouts.app')

@php
$items = get_field('items');
@endphp

@section('content')
  <main class="relative bg-yellow-2 min-h-[1000px] pb-[12vw]">
    <img src="@asset('images/faq-image-l.webp')" class="hidden md:block fixed top-0 left-0 mt-48" alt="">
    <img src="@asset('images/faq-image-r.webp')" class="hidden md:block fixed top-0 right-0 mt-48" alt="">
    <img src="@asset('images/faq-image-b.webp')" class="md:hidden absolute bottom-0 w-full" alt="">
    @while(have_posts()) @php(the_post())
      <div class="h-full">
        <img src="@asset('images/page-shape-1.webp')" class="w-full" alt="">
        <div class="relative relative max-w-[249px] mx-auto mt-12">
          <img src="@asset('images/faq-header-shape@2x.webp')" class="absolute w-full" alt="">
          <h1 class="relative font-ga text-45px text-center pt-1">
            @php(the_title())
          </h1>
        </div>
        @if($items)
          <div
            x-data="{
              show: null,
              toggleShow: function(id) {
                this.show = this.show === id ? null : id;
              }
            }"
            class="relative w-full max-w-[930px] px-4 lg:px-0 mx-auto mt-14 space-y-4">
            @foreach($items as $key => $item)
              <div class="bg-white px-8 py-4 rounded-[33px]">
                <button @click="toggleShow({{ $key }})" class="relative block w-full font-ga text-xl sm:text-3xl text-left pr-8">
                  {{ $item['question'] }}
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    :class="show === {{ $key }} ? 'rotate-180' : ''"
                    class="absolute transition-transform right-0 top-0 mt-1 h-6 w-6 sm:h-8 sm:w-8"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <div x-show="show === {{ $key }}" x-collapse>
                  <p class="text-base mt-2">
                    {!! $item['answer'] !!}
                  </p>
                </div>
              </div>
            @endforeach
          </div>
        @endif
      </div>
    @endwhile
  </main>
@endsection
