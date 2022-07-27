@extends('layouts.app')

@section('content')
  <figure>
    <img src="@asset('images/tmp/gelato-tax.webp')" class="w-full" alt="">
  </figure>
  <header>
    <h1 class="font-ga text-6xl text-brown-1 block max-w-[940px] text-center mx-auto mt-10 mb-52">
      Authentic gelato with a plant-based twist. The true Italian way.
    </h1>
  </header>
  <main class="min-h-[26vh] bg-yellow-2 pb-48">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-full">
      <path data-name="Subtraction 14" d="M102.761 149.766c-2.279 0-4.8-1.053-7.5-3.127a40.115 40.115 0 0 1-7.3-7.664c-4.36-5.77-8.219-13.1-9.833-18.67a3.5 3.5 0 0 0-1.288-.277 3.323 3.323 0 0 0-2.477 1.543 3.347 3.347 0 0 1-2.487 1.543 3.54 3.54 0 0 1-1.293-.279 38.133 38.133 0 0 0-10.336-11.566 54.053 54.053 0 0 0-14-7.414c-11.555-4.223-23.669-5.107-31.8-5.107a108.363 108.363 0 0 0-11.681.619 10.1 10.1 0 0 1-1.286.074c-.453 0-.951-.023-1.481-.066V0h1920c-14.209.342-24.195.574-29.681.7-3.477.074-10.037.605-19.117 1.34l-.229.02h-.042c-21.743 1.76-58.133 4.7-94.9 4.7-1.368 0-2.556 0-3.632-.006-1.2-.008-2.769-.016-4.279-.016-12.664 0-21.466.322-27.7 1.012a56.52 56.52 0 0 0-11.363 2.332c-4.383 1.295-8.916 2.633-22.507 3.559-9.942.674-17.688 1.7-23.023 3.057-4.71 1.2-6.61 2.428-7.375 3.248-4.89.422-9.772.889-14.512 1.387-8.833-3.5-18.923-5.2-30.845-5.2-14.259 0-28.771 2.4-42.8 4.717l-.056.01c-8.029 1.328-15.614 2.58-22.767 3.314a11.129 11.129 0 0 1-1.151.059c-2.87 0-5.619-1.029-8.277-2.023l-.083-.033c-2.628-.986-5.345-2.01-8.047-2.01-3.563 0-6.619 1.748-9.617 5.5-10.776-.084-22.034-.727-33.952-1.406l-.2-.012c-13.065-.746-26.575-1.52-39.672-1.52-22.188 0-38.75 2.277-52.121 7.164-8.819-4.162-18.544-6.1-30.607-6.1a240.357 240.357 0 0 0-25.24 1.814l-.056.008h-.013a243.627 243.627 0 0 1-25.737 1.834c-1.06 0-2.116-.014-3.137-.039a81.273 81.273 0 0 1-14.208-2.051h-.017l-.045-.008a70.506 70.506 0 0 0-14.25-1.945 31.633 31.633 0 0 0-4.893.365 21.779 21.779 0 0 0-6.324 2.623h-.007c-2.409 1.287-4.9 2.617-7.376 2.867a35.964 35.964 0 0 1-3.652.182h-.009c-7.684 0-15.506-2.3-23.071-4.527l-.039-.012h-.008c-7.583-2.234-15.423-4.541-23.108-4.541a35.229 35.229 0 0 0-6.136.523 65.915 65.915 0 0 0-13.3 4.344c-5.234 2.141-10.179 4.164-15.455 4.164-.375 0-.75-.01-1.117-.029-8.962-.494-18.62-1.732-28.845-3.045h-.027c-8.047-1.033-16.368-2.1-24.822-2.859-7.39-.666-14.038-.988-20.323-.988-13.9 0-25.986 1.6-36.945 4.9a16.755 16.755 0 0 1-4.909.7 39.934 39.934 0 0 1-10.3-1.826l-.133-.035-.025-.008a38.82 38.82 0 0 0-9.942-1.8 15.793 15.793 0 0 0-2.6.209c-2.41.393-4.9 2.145-7.3 3.838h-.007c-2.524 1.779-5.135 3.621-7.708 3.951a57.454 57.454 0 0 1-7.476.439c-5.609 0-11.488-.582-17.712-1.2h-.039l-.379-.039c-5.724-.57-12.212-1.219-18.377-1.219a57.409 57.409 0 0 0-13.234 1.344 15.732 15.732 0 0 1-3.682.414c-3.955 0-7.873-1.264-12.021-2.6-3.923-1.266-7.979-2.574-12.059-2.7a45.74 45.74 0 0 0-1.493-.025c-6.755 0-13.464 1.393-19.384 2.621l-.431.088c-6.137 1.271-11.932 2.471-17.576 2.471a30.062 30.062 0 0 1-8.658-1.17 25.4 25.4 0 0 1-8.219-4.182 56.269 56.269 0 0 1-16.063 6.207 83.4 83.4 0 0 1-18.53 1.965 113.474 113.474 0 0 1-24.168-2.713 123.629 123.629 0 0 1-23.331-7.568c-1.368 1.689-2.2 4.348-2.83 6.725a27.314 27.314 0 0 0-11.675-2.461c-6.194 0-12.45 1.709-18.5 3.361l-.057.018h-.009c-6 1.637-12.206 3.33-18.2 3.33a26.17 26.17 0 0 1-9.758-1.764 2.786 2.786 0 0 0-.5-.049c-1.654 0-2.389 1.787-3.1 3.516a7.56 7.56 0 0 1-1.835 3.088 19.688 19.688 0 0 0-9.08-2.379c-5.294 0-10.253 2.459-15.995 5.3a68.482 68.482 0 0 0-15.251-4.816 75.469 75.469 0 0 0-14.3-1.289 161.862 161.862 0 0 0-19.192 1.443l-1.055.123a158.548 158.548 0 0 1-18.534 1.453c-.858 0-1.727-.016-2.583-.047a57.022 57.022 0 0 1-11.052-1.277 50.3 50.3 0 0 1-11.272-3.914 33.131 33.131 0 0 1-13.6 8.588 44.59 44.59 0 0 1-14.2 1.912c-2.732 0-5.563-.133-8.06-.252h-.035c-2.633-.121-5.356-.25-8.029-.25a50.939 50.939 0 0 0-9.976.846c-2.457.479-4.93 2.982-7.322 5.4-2.35 2.381-4.781 4.842-7.179 5.348a5.231 5.231 0 0 1-1.041.105c-2.115 0-3.815-1.277-5.615-2.631h-.005c-1.556-1.168-3.166-2.377-5.057-2.662a3.46 3.46 0 0 0-.51-.039c-1.494 0-2.962.938-4.516 1.928l-.24.156c-1.77 1.125-3.385 2.061-5.213 2.107h-.162c-2.749 0-5.687-1.934-8.528-3.8-2.729-1.8-5.549-3.656-8.263-3.879a7.388 7.388 0 0 0-.623-.027c-2.761 0-5.4 1.664-7.72 3.133l-.125.082-.01.006c-2.454 1.553-4.772 3.018-7.194 3.025h-.077c-3.195 0-6.215-2.037-9.135-4.008-2.674-1.8-5.2-3.5-7.767-3.676a12.617 12.617 0 0 0-.814-.027 16.675 16.675 0 0 0-7.118 1.844 65.046 65.046 0 0 0-6.951 4.057l-.024.014c-1.993 1.275-4.054 2.592-6.125 3.66a19.078 19.078 0 0 1-8.733 2.508 13.4 13.4 0 0 1-7.005-2.033 28.136 28.136 0 0 1-7.6-7.162c-6.266 3.57-12.819 4.826-19.756 6.156a100.093 100.093 0 0 0-16.611 4.227 58.935 58.935 0 0 0-10.011 5.381l-.013.01c-4.364 2.713-8.485 5.277-12 5.453a3.18 3.18 0 0 1-.237.008c-1.953 0-4.119-1.311-6.214-2.576-1.876-1.133-3.647-2.205-5.289-2.422a19.6 19.6 0 0 0-2.357-.141 29.012 29.012 0 0 0-9.757 1.93 104.428 104.428 0 0 0-9.636 4.219l-.074.035-.116.055c-6.416 3.076-13.051 6.254-19.838 6.254a21.174 21.174 0 0 1-12.529-4.162 32.432 32.432 0 0 1-12.58 5.332 68.971 68.971 0 0 1-14.193 1.209c-3.039 0-6.247-.105-9.078-.2h-.029l-.316-.01h-.05c-2.889-.1-5.876-.193-8.773-.193h-.4a76.816 76.816 0 0 0-11.558.855 37.123 37.123 0 0 0-10.543 3.213c-7.211 3.545-12.369 9.721-15.769 18.879.62 8.486.114 16.088-1.463 21.986-1.476 5.525-3.838 9.2-6.649 10.355a4.869 4.869 0 0 1-1.835.375c-2.629 0-4.864-2.338-7.45-5.047-2.474-2.588-5.275-5.518-9.016-6.982a84.913 84.913 0 0 0-23.862-4.846 78.277 78.277 0 0 0-3.586-.084 54.09 54.09 0 0 0-11.68 1.154 26.249 26.249 0 0 0-9.582 3.994c-2.189 1.555-4.3 5.447-6.338 9.215V132.819c-2.271 4.191-4.62 8.527-7.014 9.4a7.5 7.5 0 0 1-2.575.447c-4 0-8.167-2.9-12.575-5.963l-.327-.227c-4.145-2.889-8.843-6.162-13.416-6.162a9.1 9.1 0 0 0-3.532.705c-4.165 1.762-7.633 7.463-10.42 12.045-2.1 3.455-3.917 6.439-5.38 6.619a6.69 6.69 0 0 1-.99.083Z" fill="#fff"/>
    </svg>

    <div class="relative -mt-[17rem]">
      <div class="hidden lg:block absolute z-40 bg-white left-0 top-0 bg-whtie rounded-r-[50px] p-8 shadow-md shadow-yellow-2 w-[26vw] max-w-[470px] font-ga">
        <div class="flex flex-col space-y-8">
          <a href="#" class="relative flex items-center gap-6">
            <img src="@asset('images/filters-shape@2x.webp')" class="absolute left-0 w-[115px]" alt="">
            <span class="relative w-[110px] flex items-center justify-center">
              <img src="@asset('images/003-popsicle@2x.webp')" class="h-[58px]" alt="" />
            </span>
            <span class="relative flex-none">Gelato</span>
          </a>
          <a href="#" class="relative flex items-center gap-6">
            <img src="@asset('images/filters-shape@2x.webp')" class="absolute left-0 w-[115px]" alt="">
            <span class="relative w-[110px] flex items-center justify-center">
              <img src="@asset('images/002-hazelnut@2x.webp')" class="h-[45px]" alt="" />
            </span>
            <span class="relative flex-none">Hazelnut spread</span>
          </a>
        </div>
        <div class="2xl:ml-[124px] mt-12">
          <div class="ml-2.5">Filters</div>
          <div class="grid grid-cols-3 items-start gap-4 mt-2">
            <a href="#" class="flex flex-col justify-center items-center">
              <img src="@asset('images/glutten-free-icon@2x.webp')" class="w-[58px]" alt="">
              <span class="text-center leading-tight mt-2">Gluten - free</span>
            </a>
            <a href="#" class="flex flex-col justify-center items-center">
              <img src="@asset('images/almond@2x.webp')" class="w-[58px]" alt="">
              <span class="text-center leading-tight mt-2">Made With Almond</span>
            </a>
            <a href="#" class="flex flex-col justify-center items-center">
              <img src="@asset('images/oat@2x.webp')" class="w-[58px]" alt="">
              <span class="text-center leading-tight mt-2">Made With<br> Oat</span>
            </a>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-4 sm:grid-cols-12 gap-14 max-w-[1537px] mx-auto px-4">
        <div class="lg:col-start-5 xl:col-start-4 2xl:col-start-4 col-span-4 sm:col-span-12 xl:col-span-9 2xl:col-span-9 xl:pl-8 2xl:pl-0">
          <div class="grid grid-cols-1 md:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-14">
            @while(have_posts()) @php(the_post())
              <a href="{{ get_the_permalink() }}" class="">
                @php(the_post_thumbnail('large', ['class' => 'h-[279px] 2xl:h-[379px] w-full object-cover']))
                <h2 class="text-center font-ga text-3xl mt-2">@php(the_title())</h2>
              </a>
            @endwhile
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
