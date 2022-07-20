@extends('layouts.app')

@section('content')
  <div class="relative lg:flex lg:items-center lg:min-h-[50vw] overflow-hidden">
    <div class="hidden lg:block w-full">
      <div
        class="absolute left-0 top-0 w-full h-full bg-no-repeat bg-cover"
        style="background-image: url(@asset('images/hero-slider-bg.png'))">
      </div>
      <div class="w-full max-w-[1640px]">
        <div class="relative z-10 font-ga text-brown-1 max-w-[770px] flex flex-col items-center">
          <div class="text-45px leading-14 text-center">
            Blending <span class="text-70px">Italian</span> tradition<br>
            and <span class="text-70px">plant-based</span> ingredients to
          </div>
          <div class="text-155px text-center leading-none">
            perfection
          </div>
          <a href="#" class="block mt-10 font-ga text-25px bg-green-1 text-white text-center w-full max-w-[348px] py-3 rounded-full">
            {{ __('Read more', 'code') }}
          </a>
        </div>
      </div>
    </div>
    <div class="lg:hidden">
      <div class="font-ga text-brown-1 bg-yellow-1 pt-8">
        <div class="text-2xl leading-10 text-center">
          Blending <span class="text-5xl">Italian tradition</span>
          and <span class="text-5xl">plant-based</span> <span class="text-3xl">ingredients to</span>
        </div>
        <div class="text-70px text-center leading-none">
          perfection
        </div>

        <a href="#" class="block mx-auto mt-10 font-ga text-xl bg-green-1 text-white text-center w-full max-w-[287px] py-3 rounded-full">
          {{ __('Read more', 'code') }}
        </a>

        <img class="w-full" src="@asset('images/tmp/hero-slider-bg-m.png')" alt="">
      </div>
    </div>
  </div>
  <section class="bg-white text-center lg:text-left py-10 px-8 flex flex-col lg:flex-row-reverse items-center lg:gap-20 max-w-[1110px] mx-auto">
    <main>
      <header>
        <h2 class="text-6xl font-ga mb-6">About us</h2>
        <h4 class="font-ga text-2xl lg:text-3xl mb-6">Making delicious Italian goodness that’s indulgent, healthy for you and cares for the planet.</h4>
      </header>
      <p class="font-medium text-base lg:text-lg mb-6">
        Our typical Italian story is about combining the pleasures of life with a commitment to improve the quality
        of life through innovation and a little bit of creativity.
      </p>
      <a href="#" class="block font-ga text-25px bg-green-1 text-white text-center w-full max-w-[348px] py-3 rounded-full">
        {{ __('Read more', 'code') }}
      </a>
    </main>
    <figure class="mt-12 flex-none">
      <img src="@asset('images/tmp/valsoia-gamyklos-kadras.webp')" class="w-full" alt="">
    </figure>
  </section>
@endsection
