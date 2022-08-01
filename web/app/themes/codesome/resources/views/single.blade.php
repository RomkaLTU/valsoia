@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="w-full max-w-[1520px] mx-auto">
      @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
    </div>

    @if(isset($products) && $products)
      <div class="glider-products-container sm:w-[95%] max-w-[1557px] mx-auto sm:px-4">
        <div class="glider-products font-ga text-3xl">
          @foreach($products as $product)
            <a href="{{ get_permalink($product) }}" class="flex flex-col gap-6 items-center">
              {!! get_the_post_thumbnail($product, 'large', ['class' => 'w-full h-full object-contain']) !!}
              <h3 class="text-center">{{ $product->post_title }}</h3>
            </a>
          @endforeach
        </div>
        <button aria-label="Previous" class="glider-prev">
          <img class="w-[57px]" src="@asset('images/slider-left@2x.webp')" alt="">
        </button>
        <button aria-label="Next" class="glider-next">
          <img class="w-[57px]" src="@asset('images/slider-right@2x.webp')" alt="">
        </button>
      </div>
    @endif
  @endwhile
@endsection
