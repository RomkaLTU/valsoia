<div class="{{ $block->classes }} px-4 lg:px-0">
  @if ($image_src)
    <div class="max-w-[920px] mx-auto">
      <figure>
        <img src="{{ $image_src }}" alt="">
      </figure>
    </div>
  @endif
</div>
