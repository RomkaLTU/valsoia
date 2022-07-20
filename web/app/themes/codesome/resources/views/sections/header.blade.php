<header class="banner">
  <div class="w-full max-w-[1640px] mx-auto px-6 py-4">
    <div class="relative flex items-center justify-center xl:justify-between">
      <a class="brand w-[84px] xl:w-[162px]" title="{!! $siteName !!}" href="{{ home_url('/') }}">
        @include('svg.logo')
      </a>

      <div class="flex items-center">
        <button type="button" class="absolute right-0 top-0 mt-2 xl:hidden">
          @include('svg.menu')
        </button>
        @if (has_nav_menu('primary_navigation'))
          <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'menu_class' => 'nav hidden xl:flex gap-2 uppercase text-2xl font-ga',
              'echo' => false
            ]) !!}
          </nav>
        @endif

        <div class="flex-none hidden xl:flex">
          @php do_action('wpml_add_language_selector') @endphp
        </div>
      </div>
    </div>
  </div>
</header>
