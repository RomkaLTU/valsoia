<div class="relative {{ $block->classes }}">
  @if($items)
    <div class="swiper-images overflow-hidden relative sm:w-[95%] max-w-[1557px] mx-auto sm:px-4">
      <div class="swiper-wrapper items-baseline font-ga text-3xl">
        @foreach ($items as $item)
          <div class="swiper-slide flex flex-col gap-6 items-center">
            <img src="{{ wp_get_attachment_image_url($item['image'], 'large') }}" alt="">
          </div>
        @endforeach
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  @endif
</div>
