<div class="swiper-products overflow-hidden relative sm:w-[95%] max-w-[1557px] mx-auto sm:px-4 py-6">
  <div class="swiper-wrapper items-baseline font-ga text-3xl">
    @foreach($products as $product)
      @php
        $originalTaxonomyId = apply_filters('wpml_object_id', \Illuminate\Support\Arr::first(get_the_terms($product->id, 'product_categories'))->term_id, 'product_categories', false, 'en');
        $transparentProdImage = get_field('transparent_image_bg', 'term_' . $originalTaxonomyId);
      @endphp
      <a href="{{ get_permalink($product) }}" class="swiper-slide group flex flex-col gap-6 items-center">
        @if($transparentProdImage)
          {!! get_the_post_thumbnail($product, 'large', ['class' => 'w-full h-full object-contain group-hover:-translate-y-6 transition-transform duration-1000']) !!}
        @else
          {!! get_the_post_thumbnail($product, 'large', ['class' => 'shadow-lg w-full h-full object-contain group-hover:-translate-y-6 transition-transform duration-1000']) !!}
        @endif
        <h3 class="text-center">{{ $product->post_title }}</h3>
      </a>
    @endforeach
  </div>
</div>
<div class="swiper-products-buttons swiper-button-next">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
  </svg>
</div>
<div class="swiper-products-buttons swiper-button-prev">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
  </svg>
</div>
