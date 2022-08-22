<a href="{{ get_the_permalink() }}" class="group flex flex-col justify-between">
  @if($transparentProdImage)
    @php(the_post_thumbnail('large', ['class' => 'w-full group-hover:-translate-y-6 transition-transform duration-1000']))
  @else
    @php(the_post_thumbnail('large', ['class' => 'w-full shadow-lg group-hover:-translate-y-6 transition-transform duration-1000']))
  @endif
  <h2 class="text-center font-ga text-3xl mt-4">@php(the_title())</h2>
</a>
