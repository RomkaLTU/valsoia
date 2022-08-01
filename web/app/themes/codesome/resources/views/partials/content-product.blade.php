<a href="{{ get_the_permalink() }}" class="">
  @php(the_post_thumbnail('large', ['class' => 'w-full shadow-lg']))
  <h2 class="text-center font-ga text-3xl mt-4">@php(the_title())</h2>
</a>
