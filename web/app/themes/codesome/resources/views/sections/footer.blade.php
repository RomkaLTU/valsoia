<footer class="relative">
  <img
    src="@asset('images/footer-illiustration@2x.webp')"
    width="779"
    height="572"
    alt=""
    class="absolute right-0 bottom-0 z-20 w-[27vw]" />
  <div class="-mt-[16vw] absolute left-0 right-0 w-full">
    @include('svg.footer-shape-1')
  </div>
  <div class="w-full max-w-[1640px] mx-auto px-6 py-4 z-50">
    <div class="relative flex items-center justify-center xl:justify-between">
      <a class="brand w-[84px] xl:w-[162px]" title="{!! $siteName !!}" href="{{ home_url('/') }}">
        <img src="@asset('images/logo@2x.webp')" width="254" height="102" alt="{!! $siteName !!}">
      </a>
    </div>
  </div>
</footer>
