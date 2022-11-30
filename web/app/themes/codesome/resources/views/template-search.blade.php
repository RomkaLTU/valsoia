{{--
  Template Name: Search
--}}

@extends('layouts.app')

@section('content')
  <main class="relative bg-white min-h-[1000px] pb-[12vw] pt-20">
    <h1 class="font-ga font-bold text-6xl max-w-[800px] mx-auto text-center">
      {{ __('Looking for Valsoia? you’ve come to the right place', 'code') }}
    </h1>
    <p class="text-lg text-center max-w-[900px] mx-auto my-12">
      {{ __('Valsoia’s distribution network is continually expanding. To find the retail outlet nearest you that sells our dairy-free products, just use the handy tool below.', 'code') }}
    </p>
    <div class="px-4">
      <div id="destinidiv" class="relative z-20 max-w-[1640px] sm:mx-auto pb-12 lg:-mb-[20vw]">
        <script src="//destinilocators.com/valsoia/site/install/"></script>
        <script>
          window.onload = () => {
            destini.init("destinidiv");
            destini.loadWidget("ASSOCIATIONID");
          };
        </script>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 138.76" class="-mb-[7vw]">
      <path id="Intersection_5" data-name="Intersection 5" d="M3607.86,21761.5c-1.976-.777-2.858.24-3.745,1.254s-1.774,2.035-3.755,1.264c-12.607-22.084-46.1-25.652-67.46-23.314a13.73,13.73,0,0,1-2.754,0V21652h1920v6.982c-28.25.326-56.6-.055-84.94-.436-61.083-.826-122.122-1.648-182.1,4.643-29.78-11.787-67.1-.148-95.971,2.818-3.241.33-6.333-.814-9.394-1.965-5.775-2.162-11.419-4.324-17.633,3.449-40.247-.318-90.283-8.572-125.286,4.2-17.693-8.338-36.569-6.3-55.674-4.248-9.536,1.018-19.133,2.041-28.669,1.773-11.715-.318-22.094-5.354-33.24-3.607-4.308.7-8.972,4.977-13.642,5.457-8.857.887-17.742-1.725-26.627-4.336-9.717-2.857-19.439-5.715-29.1-3.984-11.163,2.014-19.828,8.967-29.709,8.414-15.979-.877-34.39-4.16-53.413-5.863s-38.583-1.637-56.966,3.887c-5.129,1.543-10.2.209-15.169-1.127-4.27-1.15-8.475-2.3-12.591-1.615-4.9.8-9.925,7.1-14.939,7.746-7.6.984-16.39.1-25.346-.789-10.861-1.078-21.985-2.15-31.57.115-8.934,2.113-18.131-4.57-27.618-4.85-7.035-.225-13.938,1.16-20.638,2.545-12.531,2.59-24.328,5.18-34.833-2.748-21.257,12.525-55.121,9.568-81.661-2.092a18.425,18.425,0,0,0-2.814,6.686c-9.914-4.566-20-1.84-30,.887-9.449,2.572-18.821,5.145-27.9,1.582-3.285-.631-3.307,4.893-5.414,6.508-9.351-4.773-15.947-1.549-24.941,2.9-17.939-7.992-33.574-6.373-48.492-4.631-7.456.875-14.737,1.779-22.056,1.527a52.674,52.674,0,0,1-22.209-5.158c-11.173,11.311-23.458,10.742-35.682,10.172-6.043-.279-12.065-.564-17.934.592-4.855.947-9.624,9.672-14.43,10.686-4.577.914-7.336-4.512-11.66-5.156-3.279-.5-6.405,4.018-10.423,4.121-5.381.143-11.272-7.166-16.866-7.631-5.628-.51-10.478,6.152-15.591,6.186-6.065.061-11.469-7.285-16.888-7.637-7.226-.5-13.883,5.857-20.923,9.482s-14.419,4.686-23.217-6.646c-10.971,6.24-22.806,5.365-36.18,10.32-7.812,2.895-15.8,10.461-21.908,10.768-3.673.2-8.091-4.479-11.682-4.961-7.363-.881-14.578,2.6-21.843,6.066-10.429,4.992-20.961,9.98-32.178,2.074-9.93,7.139-22.844,6.713-35.72,6.291-3.17-.105-6.339-.209-9.46-.2-15.75.17-30.317,3.016-37.669,22.795,1.292,17.693-2.491,29.84-8.069,32.129-6.17,2.5-9.744-8.271-18.208-11.578a84.431,84.431,0,0,0-23.742-4.812c-9.246-.432-18.673.717-24.711,5.031-4.637,3.279-8.8,16.867-13.3,18.514-4.8,1.746-10.018-1.977-15.372-5.693-5.589-3.887-11.326-7.768-16.877-5.43-7.3,3.07-12.35,18.125-15.728,18.541a6.985,6.985,0,0,1-.949.063C3622.749,21790.76,3610.891,21771.941,3607.86,21761.5Z" transform="translate(-3530.146 -21652)" fill="#fff"/>
    </svg>
    <div class="bg-yellow-2 pb-32 -mb-20 lg:pb-40 lg:-mb-40 pt-[20vw]">
      <div class="mt-10 lg:mt-0 px-4 lg:px-0">
        <h2 class="font-ga font-bold text-6xl max-w-[1000px] mx-auto text-center">
          {{ __('Want your local store to sell Valsoia?', 'code') }}
        </h2>
        <p class="text-lg text-center max-w-[900px] mx-auto my-12">
          {{ __('We’ve created a handy fact sheet you can give to your local store manager. It provides everything they need to know about how to stock Valsoia on their shelves. Thanks for helping spread the word about Valsoia!', 'code') }}
        </p>
        <div class="flex justify-center">
          <a href="{{ get_permalink(get_page_by_path('contact')) }}" class="block hover:bg-black-1 transition-colors duration-500 font-ga font-bold text-25px bg-green-1 text-white text-center w-full max-w-[296px] h-[60px] mx-auto lg:mx-0 py-3 rounded-full">
            {{ __('Contact us', 'code') }}
          </a>
        </div>
      </div>
    </div>
  </main>
@endsection
