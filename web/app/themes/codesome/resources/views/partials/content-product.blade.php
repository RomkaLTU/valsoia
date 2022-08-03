<a href="{{ get_the_permalink() }}" class="">
  @if($transparentProdImage)
    @php(the_post_thumbnail('large', ['class' => 'w-full']))
  @else
    @php(the_post_thumbnail('large', ['class' => 'w-full shadow-lg']))
  @endif
  <h2 class="text-center font-ga text-3xl mt-4">@php(the_title())</h2>
</a>
