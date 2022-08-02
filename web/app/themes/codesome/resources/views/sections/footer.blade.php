<footer class="relative">
  <div class="-mt-[44vw] sm:-mt-[34vw] lg:-mt-[25vw] absolute left-0 right-0 w-full pointer-events-none">
    @include('svg.footer-shape-1')
  </div>
  <div class="w-full max-w-[1640px] mx-auto px-6 py-4 mt-32 z-50">
    <div class="lg:absolute mt-4 lg:mt-0 mb-8 lg:mb-0 flex items-center justify-center xl:justify-between">
      <a class="w-[162px]" title="{!! $siteName !!}" href="{{ home_url('/') }}">
        <img src="@asset('images/logo@2x.webp')" width="254" height="102" alt="{!! $siteName !!}">
      </a>
    </div>
    <div class="relative space-y-8 pb-8">
      <nav class="nav-footer flex items-center justify-center max-w-[400px] mx-auto" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
        {!! wp_nav_menu([
          'theme_location' => 'footer_navigation',
          'menu_class' => 'font-ga flex justify-center flex-wrap gap-x-8 gap-y-2',
          'echo' => false,
        ]) !!}
      </nav>
      <div class="flex items-center justify-center gap-6 font-ga">
        <span>Follow us</span>
        <a href="https://www.facebook.com/valsoia.international" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="38" height="34" viewBox="0 0 38 37"><defs><clipPath id="icera"><path d="M-5.995 18.893c0-13.808 11.193-25 25-25s25 11.192 25 25c0 13.807-11.193 25-25 25s-25-11.193-25-25z"/></clipPath></defs><g><g><g><path fill="#fff" d="M-5.995 18.893c0-13.808 11.193-25 25-25s25 11.192 25 25c0 13.807-11.193 25-25 25s-25-11.193-25-25z"/></g><g clip-path="url(#icera)"><g><path d="M18.697 2.817c8.804-.168 16.291 6.918 16.291 16.08 0 9.008-7.202 15.933-15.699 16.086-8.774.154-16.203-6.902-16.284-16.064C3.064 9.917 10.2 2.97 18.697 2.817zm18.521 16.584C37.49 9.098 29.22.777 19.223.668 9.133.558 1.016 8.652.79 18.45c-.242 10.288 8.08 18.711 18.2 18.667 9.922.052 17.973-7.963 18.228-17.717z"/></g><g><path d="M15.187 31.722V18.831h-2.815v-4.344c.124-.007.249-.021.38-.021.68 0 1.368-.015 2.048.007.3.007.402-.073.394-.38a168.252 168.252 0 0 1-.007-3.327c.007-1.25.358-2.384 1.25-3.29.863-.878 1.967-1.354 3.167-1.427 1.93-.11 3.868-.095 5.805-.131.022 0 .044.022.088.044v4.46c-.139.007-.27.015-.395.015H22.47c-.885.007-1.404.533-1.404 1.403 0 .827 0 1.66.007 2.487 0 .021.015.043.037.124h4.446c-.19 1.484-.366 2.903-.556 4.372h-3.949v12.914c-1.967-.015-3.882-.015-5.864-.015z"/></g></g></g></g></svg>
        </a>
        <a href="https://www.instagram.com/valsoia_international" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"><defs><clipPath id="j6daa"><path d="M-8.995 16.893c0-13.808 11.193-25 25-25s25 11.192 25 25c0 13.807-11.193 25-25 25s-25-11.193-25-25z"/></clipPath></defs><g><g><g><path fill="#fff" d="M-8.995 16.893c0-13.808 11.193-25 25-25s25 11.192 25 25c0 13.807-11.193 25-25 25s-25-11.193-25-25z"/></g><g clip-path="url(#j6daa)"><g><path d="M2.333 16.887c0-2.233.058-4.467-.02-6.707-.103-3.308 2.111-5.555 4.494-6.442.867-.324 1.76-.512 2.686-.512 4.338-.006 8.676-.038 13.014.013 2.46.026 4.519 1.017 6.008 3.03.77 1.05 1.14 2.24 1.14 3.542 0 4.597-.02 9.193.006 13.79.013 3.004-1.457 5.005-4.085 6.26-.965.46-2 .68-3.07.68-4.35.014-8.7.052-13.045-.012-2.706-.046-4.888-1.198-6.332-3.561-.55-.9-.796-1.897-.796-2.959v-7.122zm29.717 0V9.804c0-1.864-.544-3.56-1.67-5.037C28.36 2.126 25.62.87 22.338.844 18.111.805 13.877.83 9.648.83c-1.611.006-3.159.324-4.583 1.068C1.79 3.621-.056 6.27-.056 10.057v13.92c0 1.754.485 3.373 1.502 4.797 1.936 2.706 4.636 4.079 7.918 4.144 4.357.084 8.72.025 13.078.019 1.392 0 2.739-.291 4.02-.842 3.192-1.372 5.698-4.454 5.6-8.442-.057-2.253-.012-4.513-.012-6.766z"/></g><g><path d="M16.033 21.355c-2.843.006-5.154-2.26-5.16-5.057 0-2.79 2.317-5.05 5.16-5.05 2.829 0 5.134 2.266 5.14 5.037.007 2.797-2.298 5.07-5.14 5.07zm7.536-5.057c-.007-4.111-3.386-7.445-7.55-7.439-4.15 0-7.542 3.34-7.536 7.42.007 4.143 3.374 7.471 7.55 7.471 4.162-.006 7.536-3.347 7.536-7.452z"/></g><g><path d="M24.443 6.593c.874 0 1.586.745 1.586 1.658-.007.912-.725 1.65-1.6 1.644-.86-.006-1.566-.745-1.566-1.638-.007-.913.706-1.664 1.58-1.664z"/></g></g></g></g></svg>
        </a>
      </div>
      <div class="text-center font-ga">
        Valsoia Ⓒ {{ date('Y') }}
      </div>
    </div>
  </div>
  <img
    src="@asset('images/footer-illiustration.webp')"
    width="779"
    height="572"
    alt=""
    class="lg:absolute lg:right-0 lg:bottom-0 z-20 w-full lg:w-[30vw] 2xl:w-[21vw]" />
</footer>
