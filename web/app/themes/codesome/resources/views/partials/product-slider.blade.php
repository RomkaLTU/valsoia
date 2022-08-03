<div class="swiper-products overflow-hidden relative sm:w-[95%] max-w-[1557px] mx-auto sm:px-4">
  <div class="swiper-wrapper items-baseline font-ga text-3xl">
    @foreach($products as $product)
      <a href="{{ get_permalink($product) }}" class="swiper-slide flex flex-col gap-6 items-center">
        {!! get_the_post_thumbnail($product, 'large', ['class' => 'w-full h-full object-contain']) !!}
        <h3 class="text-center">{{ $product->post_title }}</h3>
      </a>
    @endforeach
  </div>
</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
