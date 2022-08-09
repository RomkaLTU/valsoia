{{--
  Template Name: About
--}}

@extends('layouts.app')

@php
$title = get_field('title');
$subtitle = get_field('subtitle');
$intro = get_field('intro');
$intro_text = get_field('intro_text');
$story = get_field('story');
$products_title = get_field('products_title');
$about_products_first = get_field('about_products_first');
$about_products_second = get_field('about_products_second');
$video_url = get_field('video_url');
@endphp

@section('content')
  <main class="relative bg-white min-h-[1000px]">
    <div class="bg-cover bg-bottom pb-[13vw]" style="background-image: url(@asset('images/about-hero-bg.webp'))">
      <a href="{{ $video_url ?? '#' }}" data-fancybox>
        <img src="@asset('images/about-hero-video.webp')" alt="">
      </a>
      <div class="relative relative max-w-[371px] h-[119px] flex items-center justify-center mx-auto mt-12">
        <svg xmlns="http://www.w3.org/2000/svg" width="371" height="119" class="absolute w-full" viewBox="0 0 371 119"><g><g transform="rotate(-92 185.5 59.5)"><path fill="#fff" d="M179.094 246.473c.52-.612 1.03-1.224 1.551-1.836.337-.702.684-1.404 1.02-2.106l.593-.99c.092-.99.184-1.998.286-3.006a2.15 2.15 0 0 1 .643-.252c.122-1.296 0-2.718.429-3.852.173-.45.142-.828.03-1.17.072-.343.133-.685.184-1.045.214-.09.429-.162.653-.216.112-1.116.214-2.232.327-3.348.255-.306.5-.63.755-.936 1.664-.234 1.48 1.53 2.307 2.376 1.123.306 2.337.648 3.562.99 1.287-.18 1.97-1.836 3.44-1.53.092.576.99 1.116.082 1.764l.03.414-.02.415c1.174.918.45 2.574 1.562 3.906.96.396 1.94 1.602 3.49 1.494.95.216 1.89.54 2.849.63 2.215.198 4.185 1.71 6.502 1.26l.867-.036h2.532c.081-.234.173-.45.286-.684l2.317-.162c.092-.27.122-.54.092-.828 2.429-.918 4.848-1.836 7.288-2.718.714-.252 1.173-.684 1.286-1.476.439-.216.867-.414 1.306-.63.072-.955.174-1.89.909-2.593-.02-2.916 1.163-5.58 1.572-8.406.102-.702.265-1.404.398-2.106 1.98-.396 3.9-1.134 5.981-.972.327.018.684-.378 1.021-.594 1.01-.432 2.021-.882 3.042-1.314.286-.595.582-1.17.867-1.765.633-1.476 1.103-2.934 1-4.626-.213-3.492.47-7.002-.132-10.495.572-2.628.786-5.274.776-7.974-.01-3.42.286-6.859.408-10.279.051-1.332-.01-2.682-.02-4.032.602-.666.47-1.314-.041-1.962.551-.936.602-1.944.602-3.006 0-5.509.051-11.017.061-16.525.02-7.579.113-19.712-.02-27.29-.061-3.528-.225-7.057-.653-10.585.204-.198.235-.414.081-.666a7.99 7.99 0 0 1 .633-.306c-.194-1.764-.449-3.528-.561-5.292-.153-2.358-.204-4.734-.306-7.093-.194-.576-.398-1.17-.592-1.764.234-.684.663-1.35.663-2.034.061-4.914 0-9.828.04-14.743.011-2.376.154-4.752.185-7.128.01-1.044-.092-2.07-.143-3.114.03-.288.071-.558.102-.846.347-2.503.265-5.04.418-7.561.01-.216-.296-.45-.449-.666-.05.432-.081.864-.153 1.278.061-.414.102-.846.153-1.278h.03c.205-2.196.49-4.356.603-6.552.112-2.197.092-8.929.03-11.107-.02-.684-.397-1.35-.612-2.016.164-1.026.337-2.034.48-3.06.122-.883.306-1.765.286-2.647a960.875 960.875 0 0 0-.357-13.284c0-.252-.276-.505-.419-.739l.133-.396-.072-.414c.725-1.026.643-2.016-.061-3.006v-.396c.796-1.242.796-1.278.01-2.304.02-1.728 0-3.456.092-5.184.04-.684.368-1.35.572-2.035-.184-.215-.174-.414.03-.594-.255-.882-.51-1.746-.765-2.628.184-.522.571-1.08.53-1.584-.193-2.772-.5-5.544-.765-8.316-.225.036-.45.036-.674 0 .225.018.45.018.674 0l.061-10.459c0-1.008.02-2.034.03-3.042a.577.577 0 0 1 0-.648c-.234-.684-.479-1.35-.714-2.034-.204 0-.408.036-.592.09.184-.054.388-.072.592-.09-.01-.306-.03-.594-.04-.9 0-.9-.01-1.782-.02-2.682.02-.307.03-.595.05-.9.52-3.349-.51-6.553-.97-9.793l.123-3.654c-.296-.612-.602-1.206-.868-1.819-.255-.63-.46-1.278-.684-1.926 0-.27-.05-.504-.163-.738-.071-.558-.133-1.116-.204-1.692-.235 0-.46 0-.684.018a27.24 27.24 0 0 1-.45-.702v-5.634c0-1.224-.05-2.376-.591-3.439.51-.738.643-1.476.04-2.25.01-1.53.082-3.06.031-4.59-.122-3.924-.418-7.83-.398-11.755.02-3.096-.194-6.12-.755-9.126.612-3.978-.072-7.993.153-11.97.112-1.927-.357-3.601-.99-5.275-.286-.666-.572-1.332-.868-2.016a853.882 853.882 0 0 0-3.042-1.512c-.336-.234-.694-.72-1.02-.684-2.072.18-4.002-.685-5.982-1.135-.133-.81-.286-1.602-.388-2.412-.398-3.24-1.582-6.282-1.551-9.612-.735-.792-.827-1.872-.899-2.97-.438-.235-.867-.486-1.306-.72-.112-.9-.561-1.387-1.276-1.675-2.44-1.008-4.859-2.088-7.288-3.132.03-.324 0-.63-.092-.936-.776-.072-1.541-.126-2.317-.198a6.49 6.49 0 0 1-.286-.774c-.847 0-1.694-.018-2.531-.036l-.868-.054c-2.317-.522-4.297 1.188-6.502 1.404-.96.09-1.899.45-2.848.702-1.551-.126-2.531 1.242-3.49 1.692-1.113 1.513-.389 3.42-1.562 4.447l.02.486-.03.486c.898.738 0 1.35-.093 2.016-1.47.342-2.153-1.566-3.43-1.764-1.224.378-2.439.756-3.562 1.116-.837.972-.643 2.988-2.306 2.7-.256-.36-.5-.72-.756-1.08-.102-1.278-.214-2.556-.316-3.834a3.11 3.11 0 0 1-.654-.27c-.183-1.62-.54-3.133-1.633-4.23l-.326-1.62c-.664-.505-.715-1.333-.735-2.16-.52-.397-1.031-.775-1.552-1.171-.337-.936-1-1.098-1.745-1.08-.562.018-1.123.09-1.695.126-.071.252-.143.486-.194.738-.898-.522-1.776-.846-2.572.216-.47 1.17-1.388 1.044-2.225 1.188-.03.288-.092.558-.194.828-.276.324-.561.666-.847.99-1.705.936-2.879 2.394-3.348 4.644-.123.576-.531 1.063-.817 1.585 0 .648.194 1.476-.061 1.926-.806 1.458-1.082 2.88-.827 4.662.112.774-.592 1.71-.918 2.574-.562.702-1.123 1.386-1.685 2.088-.183.216-.51.396-.54.63-.184 1.296-.297 2.593-.42 3.889-.122 1.242-.601 2.106-1.622 2.556-.337.144-.582.63-.868.954-1.5.324-3.133-.144-4.501 1.008-.225-.108-.419-.054-.592.126-1.01-.378-1.92-1.242-3.042.126-.602.72-1.797.756-2.725 1.08.183.954.837 1.836.255 2.88-.306.558-.592 1.116-.919 1.728-1.051-.09-2-.162-2.817-.234-1.817 1.458-3.369 2.898-3.654 5.527-.776.648-1.389 1.368-1.562 2.61-.163 1.242-.562 2.43-.858 3.636-.336 1.62-.939 3.24-.939 4.878 0 2.844.368 5.67.582 8.515.153 2.124.868 4.194.388 6.408-.112.54.214 1.296.47 1.854.336.738.796 1.368 1.102 1.872a712.814 712.814 0 0 0-.806 4.123c-.143.972.234 2.304-.603 2.826-1.643 1.026-.183 2.826-.857 4.104-.225.432.367 1.494.582 2.268-.541 1.098-1.082 2.179-1.623 3.277v.63c.745.612 1.429 1.26 2.51.9.675-.234.695.648.736 1.26-.517.756-.541 1.518-.072 2.286-.143.756-.255 1.53-.418 2.286-.143.666-.092 1.242.398 1.692.112.648.214 1.314.327 1.962-.276.576-.45 1.17-.041 1.926.153.288.204.648.224 1.008-.132.253-.265.487-.408.738-.153.253-.265.505-.378.739-.296.144-.602.288-.898.432h-.02c0 .63.02 1.224.03 1.818-.02.306-.04.612-.071.918l.184.918-.092.414v.414l1.541.162c.204-.018.408-.054.612-.072-.204.036-.408.054-.612.072-.225.27-.45.522-.674.792v.81c.072.054.123.108.184.162-1.44 1.314-1.582 2.97-1.255 4.842.142.81.449 1.566.673 2.359.276 0 .551.035.827.108v.504l.061.504c.082.324.286.666.245.954-.194 1.206 0 2.376.184 3.546-.306.468-.613.936-.919 1.422a6.75 6.75 0 0 1 1.113.774c0 .216-.01.432-.041.648-.327 2.394.408 4.644.265 6.966-.265.055-.52.162-.765.289v.413c.173.379.357.757.561 1.135.225.396.47.792.715 1.188-.153.09-.337.198-.582.324-.123.072-.255.09-.388.144l.02.342-.05.342c.102.414.06 1.008.316 1.188 1.368 1.044 1.266 2.538 1.357 3.996a20.72 20.72 0 0 0-.204.756c-.122.558.03 1.332.296 1.836.133.252.582.27.96.324 0 .108 0 .216-.01.324-.817 1.098-1.99 1.386-3.103 1.8v.396l.03.396c-.03.378-.061.757-.081 1.135l.122 1.206c0 .594-.01 1.206-.02 1.818h-.031c.296.36.582.756.868 1.134l-.031 3.006v2.052a3.871 3.871 0 0 0-.418.738c-.143.36-.205.954-.02 1.224.08.126.173.234.264.342-.04.198-.091.396-.173.558-.551 1.026-.582 2.07-.48 3.205.674.54 1.358 1.08 2.246 1.8-.847.954-1.552 1.764-2.256 2.556l.061.288-.03.306c.632.576.694 1.44.755 2.286.214.378.429.774.633 1.152-.572 1.62-.898 3.276-.551 5.04-.48 1.765.735 6.57 1.561 7.039-.204.63-.653 1.314-.52 1.764.316 1.026.908 1.926 1.388 2.88.102.27.204.54.296.81-.541.702-1.092 1.386-1.633 2.088.286.252.551.468.806.648l-.133.18c-3.786.739-4.583 1.08-6.165 2.61a407.26 407.26 0 0 0 1.817 2.647l.786.054c-.265 0-.52-.018-.786-.054.357 1.224.704 2.448 1.113 3.852 1.684.54 3.215 1.512 3.98 3.636-1.949 2.124-4.235 3.15-6.88 2.97.236 1.099.879 1.675 1.716 1.999 2.143.81 4.317 1.404 6.594 1.17-.266.72-.786.936-1.358.882-1.654-.126-2.695 1.08-3.307 2.592-.623 1.53-.664 3.258.52 4.644-.459.594-.877 1.224-1.388 1.728-.296.288-.939.198-1.123.522-.99 1.728-2.235 3.186-3.286 4.843-.194.306-.133.99.01 1.404.204.594.592 1.098.898 1.638.255.306.51.612.755.918.266.396.521.81.776 1.206.174-.018.327-.072.45-.126a1.114 1.114 0 0 1-.45.126c-.255.378-.5.738-.745 1.098.061.594.174 1.17.163 1.764 0 .36-.194.72-.296 1.08-.54.108-1.082.234-1.612.342.02.288-.03.576-.143.828.102 1.296.561 2.178 1.755 2.214.307.288.603.576.909.864-.163 2.053.53 4.105.01 6.139-.286.342-.582.684-.868 1.026-.122 1.728.051 3.564-1.378 4.788-.244.216-.214.9-.316 1.368l.051 4.933-.02.396c.132.054.265.09.388.162 1.204.738 1.204.756.694 2.214-.113.306-.215.612-.327.9l-.03 2.088c.03.684.05 1.35.081 2.034l.051.432-.03.432c.234.108.48.198.724.27v.45l.051.45c-.061 2.034-1.092 3.222-2.48 4.122l1.684 2.97c1.296 1.495.94 3.259.582 5.023-.214 0-.419.054-.623.162-1.051.486-1.551 1.242-1.102 2.682.235.756.194 1.638.286 2.448 0 1.152.091 2.358-.868 3.15v.919c.225.306.45.594.674.9.204.036.408.054.612.09-.204-.036-.408-.054-.612-.09-.51.054-1.021.108-1.531.18v.486l.081.468c-.061.342-.122.702-.184 1.044.02.36.041.702.062 1.044l-.03 2.052.02.036c.581.324 1.153.63 1.735.954-.082.81.03 1.746-.276 2.394-.52 1.116-.092 1.89.286 2.772l.092 5.977c.5.09 1 .18 1.5.288.041 1.692-.255 3.528.184 5.04.582 1.98.653 3.96.858 5.958.244.054.48.108.714.18-.082 2.016 1.296 3.169 2 4.717.47 1.026.45 1.818-.203 2.628v.468c.775.45 1.49.99 1.49 2.178 0 2.862.337-1.26.878 1.548.53 2.736.183 5.634.816 8.389.388 1.71-.143 3.312-.694 4.878 1.133 1.062.602-1.944.919-.612.847.324 1.694.648 2.541.99.552.396 1.093.792 1.644 1.188l1.316 1.188c1.634 1.476 2.746 3.816 5.002 4.32.306.072.49.774.786 1.116.5.54 1 1.17 1.603 1.477 1.01.54 2.102.864 3.154 1.26.98 1.386 2.317.684 3.5.846 2.226.072 4.451-4.483 6.666-4.41.48 1.403-.54 2.231-.99 3.186-.561 1.188-.122 1.872.429 2.664.388.666.776 1.314 1.153 1.98.49.846 1.113 1.44 2.032 1.458 1.255 1.08.347 2.556.48 3.834l.203-.162.205.144c1.663.414 3.327.81 4.991 1.224l-.49 2.772c1.072.396 2.317.144 3.195 1.26.572 0 1.143.019 1.715.036l1.653-.287"/></g></g></svg>
        <h1 class="relative font-ga text-45px xl:text-6xl text-center">
          @if($title)
            {{ $title }}
          @else
            @php(the_title())
          @endif
        </h1>
      </div>
      <p class="font-ga text-3xl sm:text-45px leading-tight text-white w-full max-w-[953px] mx-auto text-center mt-6 px-4 md:px-0">
        {{ $subtitle }}
      </p>
    </div>

    <section class="relative z-20 max-w-[913px] mx-auto pt-4 pb-10 px-4 lg:px-0">
      <p class="mb-4 font-ga text-2xl sm:text-3xl text-center">
        {{ $intro }}
      </p>
      <p class="font-lg text-center">
        {{ $intro_text }}
      </p>
    </section>

    <img src="@asset('images/about-us-sep-1.webp')" alt="">

    @if($story)
      <section class="section-timeline w-full max-w-[1160px] mx-auto my-20 px-4 lg:px-0">
        @foreach($story as $item)
          @php($odd = $loop->index % 2 == 0)

          @if($odd)
            <div class="relative pl-8 lg:pl-0 ml-4 lg:ml-0 flex flex-col lg:flex-row gap-12 lg:gap-24 after:absolute lg:after:content-none after:left-0 after:-ml-[7px] after:w-4 after:h-4 after:rounded-full after:bg-black-1 before:absolute lg:before:content-none before:left-0 before:top-0 before:border-black-1 before:border-r-2 before:h-full">
              <div class="section-timeline-text relative flex-1 lg:text-right before:absolute before:top-0 before:right-0 before:w-4 before:h-4 before:bg-black-1 before:rounded-full before:-mr-[63px] after:absolute after:top-0 after:right-0 after:h-full after:-mr-14 after:border-black-1 after:border-r-2">
                <div class="-mt-3 lg:mb-12 lg:mb-6">
                  @if($item['story_title'])
                    <p class="font-ga text-3xl md:text-45px">
                      {{ $item['story_title'] }}
                    </p>
                  @endif
                  @if($item['story_subtitle'])
                    <p class="font-ga text-25px md:text-3xl">
                      {{ $item['story_subtitle'] }}
                    </p>
                  @endif
                  @if($item['story_text'])
                    <div class="about-timeline text-base md:text-lg mb-16">
                      {!! $item['story_text'] !!}
                    </div>
                  @endif
                </div>
              </div>
              <div class="flex-1 flex justify-start">
                <div class="-mt-3 md:-mt-6 mb-14">
                  @if($item['story_image'])
                    <figure>
                      <img src="{{ wp_get_attachment_image_url($item['story_image'], 'large') }}" class="max-w-[345px]" alt="{{ $item['story_title'] }}">
                    </figure>
                  @endif
                </div>
              </div>
            </div>
          @else
            <div class="relative pl-8 lg:pl-0 ml-4 lg:ml-0 flex flex-col lg:flex-row-reverse gap-12 lg:gap-24 after:absolute lg:after:content-none after:left-0 after:-ml-[7px] after:w-4 after:h-4 after:rounded-full after:bg-black-1 before:absolute lg:before:content-none before:left-0 before:top-0 before:border-black-1 before:border-r-2 before:h-full">
              <div class="relative flex-1 text-left">
                <div class="-mt-3 lg:mb-12 lg:mb-6">
                  @if($item['story_title'])
                    <p class="font-ga text-3xl md:text-45px">
                      {{ $item['story_title'] }}
                    </p>
                  @endif
                  @if($item['story_subtitle'])
                    <p class="font-ga text-25px md:text-3xl">
                      {{ $item['story_subtitle'] }}
                    </p>
                  @endif
                  @if($item['story_text'])
                    <div class="about-timeline text-base md:text-lg mb-16">
                      {!! $item['story_text'] !!}
                    </div>
                  @endif
                </div>
              </div>
              <div class="section-timeline-image relative flex-1 flex lg:justify-end before:absolute before:top-0 before:right-0 before:w-4 before:h-4 before:bg-black-1 before:rounded-full before:-mr-[63px] after:absolute after:top-0 after:right-0 after:h-full after:-mr-14 after:border-black-1 after:border-r-2">
                <div class="-mt-6 mb-14">
                  <figure>
                    <img src="{{ wp_get_attachment_image_url($item['story_image'], 'large') }}" class="max-w-[345px]" alt="{{ $item['story_title'] }}">
                  </figure>
                </div>
              </div>
            </div>
          @endif
        @endforeach
      </section>
    @endif

    <section>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1921 88">
        <defs>
          <clipPath id="clip-path">
            <rect id="Rectangle_2775" data-name="Rectangle 2775" width="1921" height="88" transform="translate(0 3789)" fill="#fff"/>
          </clipPath>
          <clipPath id="clip-path-2">
            <rect id="Rectangle_2776" data-name="Rectangle 2776" width="3106.775" height="1393.375" fill="#ffbe53"/>
          </clipPath>
        </defs>
        <g id="Mask_Group_74" data-name="Mask Group 74" transform="translate(0 -3789)" clip-path="url(#clip-path)">
          <g id="Group_812" data-name="Group 812" transform="translate(-824.076 3092.631)" clip-path="url(#clip-path-2)">
            <path id="Path_2465" data-name="Path 2465" d="M2653.663,957.7c6.36.461,13.634-6.751,20.3-6.385,7.8.426,15.135,2.874,22.5,4.818a74.912,74.912,0,0,0,11.144,2.215,37.379,37.379,0,0,0,11.614-.6c14.063-3.015,27.518-13.59,42.076-15.326,10.8-1.282,14.391-4.275,21.638-6.576,10.6-3.346,20.167-3.856,28.28-6.181,8.14-2.445,14.8-6.68,19.517-17.341,14.945-13.83,33.479-21.651,46.432-34.539,2.031-2.056,6.333-.844,7.119-1.629,32.892-32.206,52.892-86.641,90.593-110.027,3.234-12.27,5.341-30.107,11.639-45.445,2.8-6.858,9.229-11.268,11.232-18.28,7.375-26.014.425-59.256,14.3-78.767.706-6.551-1.885-8.308-2.626-12.711-.165-52.037-6.1-95.931-3.117-136.2-9.667-23.922-7.862-51.5-15.283-74.079-4.608-14.037-13.465-27.337-19.235-40.807-6.6-15.4-13.516-27.28-18.957-42.9.027-15.712-8.25-18.749-9.845-31.951-10.034-9.844-17.59-23.352-27.7-32.927-.948-5.3-3.348-8.494-3.547-14.922-21.194-27.384-42.184-61.044-70.829-72.177-2.577-.976-8.1-2.9-11.331-2.906-21.439-.318-54.415-7.365-64.98-28.786-3.809-1.857-3.894,3.278-7.68,1.423-2.156-10.12-12.878-29.4-22.713-29.322-3.392-.009-9.754,13.033-17.278,14.982-11.216,2.9-21.009-15.859-31.07-13.743-4.621.978-9.963,12.8-14.861,15.238-6.389,3.21-15.862,3.175-25.012,1.731a92.77,92.77,0,0,1-23.171-7.061c-8.117-3.959-10.713-14.115-17.069-12.551-5.749,1.432-10.588,11.99-10.875,28.149-9.07,17.058-23.8,17.971-39.472,16.327-15.7-1.756-32.36-6.282-45.448.366-17.728-14.308-36.78,5.184-54.423,1.2-3.528-.845-7.5-5.584-11.172-5.818-6.1-.42-14.709,5.514-22.735,7.244-13.73,2.959-25.421.817-36.878,5.211-7.736-11.257-15.162-11.131-22.487-8.66s-14.5,7.471-21.636,6.194c-5.357-.937-10.079-8.2-16.111-8.834-5.087-.553-10.5,4.92-16.049,3.817-5.516-1.055-10.721-8.344-16.086-8.828-4-.363-7.511,3.366-10.728,2.543-4.241-1.08-6.5-6.3-11.132-5.994-4.864.367-10.38,7.716-15.289,8.019-17.953,1.127-36.163-9.767-54.254,3.629a57.564,57.564,0,0,0-21.618-7.2c-7.25-1.062-14.568-1.075-22.06-1.135-14.981-.123-30.664-.443-47.789-9.72-9.333,3-16.181,5.167-25.05-.217-2.235,1.219-2.748,6.215-5.959,5.27-17.929-8.77-39.406,5.862-57.772-4.366a15.767,15.767,0,0,1-3.392,5.728c-25.342-13.578-58.742-20.114-80.981-11.208-14.951-12.842-35.11-3.631-55.123-6.506-9.405-1.337-17.955-8.431-27.021-7.541-17.756,1.745-39.606-7.156-56.513-7.1-5.045.013-10.591,5.137-15.539,5.3-8.988.325-17.616-7.165-27.348-5.646-18.768,2.9-38.214.737-56.974-2.978s-36.76-8.783-52.566-11.4c-9.774-1.623-19.008,3.678-30.284,4.227-18.683.883-36.055-13.455-54.655-13.881-4.681-.1-9.7,3.238-14.041,3.379-11.237.31-21.1-5.429-32.721-7.056-28.4-4-58.37,2.477-83.619-11.853-35.926,7.565-84.929-5.61-124.9-10.488-10.508,9.669-17.62-1.533-27-1.742-28.961-.608-67.092,5.669-95.645-8.39C1054.411,41.577,924.521,9.478,796.423,10.751,787.794.538,771.859,3.408,762.475,7.8c-1.137-5.7-6.924-6.353-11.073-8.754-17.5,11.085-35.8-3.274-56.04-3.212-6.789,12.6-17.391.486-26.2,9.44-2.238-7.913,5.132-5.615.189-10.581C653.411,16.845,611.4-1.486,591.058,2.057c1.35.284,1.178,3.963-.587,4.141-3.949-6.837-7.709,4.934-12.941,3.727C541.82,6.908,513.51,27.19,482.268,31.348c-3.373-4.023-12.268-15.982-16.844-7.543,5.288,2.3,12.3,2.668,10.627,12.7-8.676-4.7-21.156-2.02-28.169,5.075-11.32-.786-16.462-6.968-27.375-.967-2.435-.529,1.171,10.872-4.059,9.822-15.107-7.657-24.042.084-37.514-7.091-5.182,8.954-22.036,9.346-26.547,3.46-5.046,3.49,4.168,8.762,0,10.6-13.077,1.088-25.416,3.569-36.469-4.539-3.409,4.1-6,9.954-10.953,10.716-3.321.243,1.935-9.282-3.237-6.921-5.123,4.8,2.5,10.034.61,17.035-6.745,2.511-6.035,7.744-9.846,13.048-8.276-6.918-15.6,3.892-24.031,6.239-8.689,2.45-17.562-2.389-25.9-.438-7.161,1.673-10.856,8.52-18.647,7.334-6.332-.929-10.9-9.084-18-9.41-3.894,1.235,1.714,8.068-3.646,7.821-24.921-.667-49.813-1.464-69.246,9.348,29.491-12.794,48.165,7.275,74.094-4.267C209.87,113.172,218.7,99,221.093,112.1c2.205-5.171-3.076-9.631,2.326-8.075,1.74.977,2.2,3.409,5.1,3-4.612,10.668.568,11.336,1.78,19.341,20.854,2.134,37.652-.7,55.676,1.527,3.619-2.158-1.635-6.649,2.366-8.032,7.051-.908,12.115,1.438,20.547-.524,1.53,8.578,6.514,13.373,2.44,23.732-24.167-4.07-58.8,7.464-87.78,5.411-8.784-.621-17.006-10.187-23.38,2.324,13.345-2.357,22.3,13.512,33.376,16.3,14.334,3.7,31.233-7.224,45.138-2.417,3.917,1.356,5.166,5.351,8.778,5.809,2.824.392,8.3-5.1,11.432-4.291,3.409.91,3.122,5.4,6.127,5.343,6.169-.1,11.6-6.317,18.314-5.146,11.229,1.956,21.386,11.447,34.021,10.615,1.839,4.038-.195,13.075-3.218,14.235-14.544-2.662-17.093-2.571-32.117-3.917,1.572,1.16,2.385,3.166,1.862,6.7-4.535-1.262-5.877-4.089-9.564.391,11.138,1.13,8.359,17.043,3.747,23.973-27.2-6.627-61.711-3.939-83.742-13.059-2.951,4.088-5.159,9.7-9.44,11.012-26,1.917-53.989-7.088-81.758-5.6,14.971,8.21,30.743,11.518,47.366,12.738,16.621,1.254,34.1.256,52.429.349,1.178,2.168-.524,7.71,3.205,6.932,16.015-3.724,33.813.31,46-.137q6.54,14.537,12.472,29.775c19.335-1.219,34.9,8.6,50.11,19.152,15.219,10.594,30.086,22.106,48.143,24.8-.909,6.276,1.694,8.555,2.274,13.145-3.508,4.711-6.23,11.134-10.1,15.052-5.96-.486-12.413,2-17.1-3.252-16.26,7.04-34.767,5.685-54.1,3.21-19.33-2.509-39.466-5.785-58.9-3.084-5.7,9.7-2.94,18.143-.716,27.4,17.486,8.536,35.637-3.79,53.42,11.9,4.144,25.512-4.992,41.464-19.936,40.769-24.742-1.116-66.708-9.387-82.223-14.948a530.114,530.114,0,0,1-54.554.629c-18.076-.622-36.1-2.082-54.137-3.384-18.035-1.265-36.113-2.638-54.329-3.529-9.111-.447-18.251-.772-27.441-.9-9.19-.147-18.4.106-27.685.515,20.155,4.448,39.957,4.775,59.188,5.5s37.892,1.96,55.713,8.685c.286-4.554,1.819-6.428,4.6-5.548a512.62,512.62,0,0,0,55.274,8.182c18.5,1.627,36.573,1.774,52.808.038,11.666,16.807,39.1,2.766,50.851,19.832-5.907,23.1-18.043,32.35-32.464,36.423,14.232.582,26.52,10.186,38.157,13.3,9.538,2.5,27.107-2.132,31.449,3.747,1.045,1.423-1.77,5.9.482,6.455-3.931-.955,7.233-.286,8.086-.572,5.6-1.958,4.819-3.815,10.925-2.175,7.928,2.143,7.735,2.458,12.176,8.687,13.654,3.9,27.417,5.014,41.149,6.286,13.746,1.33,27.486,2.9,41.025,7.5,2.815.94,8.693,1.477,9.11,1.8,2.44,1.878-.291,5.64,3.063,6.955,1.9.757,1.628-4.335,4.459-3.347,10.558,3.608,22.647,7.584,33.522,8.733,27.224,3.005,58.545,13.923,80.754,16.429,4.727,2.3-2.654,8.35,4.006,9.332,18.669,5.538,38.021,11.164,57.7,16.342,19.707,5.239,39.745,10.067,60.043,14.667,2.983,1.281-.687,9.916,4,9.365,5.419,2.506,5.393-7.782,10.382-6.3,2.78,3.239,5.252,6.819,6.269,11.964,22.9,7.834,46.647,11.622,70.866,14.2s48.825,3.81,73.274,6.27c22.775,2.29,45.571,5.579,68,8.944s44.559,6.9,66.235,9.9c34.147,4.714,67.769,1.684,97.422,13.049,41.823.351,77.049,7.1,115.586,12.825,27.729,4.153,57.492,14.352,81.469,13.739,4.133-.119,9.57-4.049,14.269-3.259,7.071,1.193,13.2,9.5,20.241,10.839,19.01,3.625,39.758-1.5,58.769,2.211,21.321,4.18,41.68,9.2,62.571,13.611,11.788,2.491,24.142-2.275,35.989-.766,7.852.98,15.266,8,23.4,9.253,22.765,3.563,47.081-1.536,68.412,3.923,28.48,7.277,56.814,21.4,87.437,16.144A362.218,362.218,0,0,0,1695.3,734c8.864,1.6,17.72,2.9,26.328,3.9,8.618.968,17.014,1.582,24.9,1.886,23.192,20.438,51.526,7.6,79.639,15.789,2.989.849,4.6,4.354,7.548,5.695,41.943,18.782,92.589,3.943,126.722,19.664,14.428-8.983,24.432,4.586,36.478,8.806,6.5,2.275,13.017,2.073,19.511,1.49,6.515-.628,13-1.623,19.433-.876,4.206.475,7.588,5.182,11.78,6.244,12.813,3.331,26.184-1.9,40.6-1.346,10.781.381,21.36,5.9,32.537,10.15s22.855,7.436,35.661,3.418c9.116,5.035,20.5,10.666,32.44,14.149s24.41,4.853,35.758,1.124c17.736,9.91,36.347,11.36,55.148,11.743,9.405.189,18.855.116,28.291.7,9.442.554,18.906,1.642,28.271,4.382,12.647,3.684,23.51,15.944,37.193,7.358,12.615,12.516,29.067,7.747,45.391,10.529,16.122,2.737,32.6,10.745,49.41,14.758,11.985,2.865,25.628,2.714,38.368,4.9,12.77,2.1,24.667,6.431,33.156,18.578,5.8,48.141,25.62-20.522,44.429-9.606,9.8,10.368,7.823,23.638,11.429,41.194a17.019,17.019,0,0,0,13.345,4.583c4.484-.4,8.991-2.176,13.564-3.813,10.287,5.275,17.038,27.237,31.036,28.308M345.713,98.541c.532-2.368.173-3.743-.82-4.394,3.994-9.539,8.685,5.942.82,4.394m-3.226,3.628c-11.258-.768-27.975,6.459-35.27-2.182-2.175-.362.668,12.085-3.157,14.24-4.2-5.795-9.425-10.452-17.657-11.66,1.316-17.291,16.533-4.794,18.9-19.871,6.149,2.3,9.146,3.511,12.837-4.028,12.283,7.563,16.33-2.66,25.429,4.652-3.673,9.476.91,7.8-1.077,18.849" transform="translate(48.191 729.47) rotate(-3)" fill="#ffbe53" fill-rule="evenodd"/>
          </g>
        </g>
      </svg>
      <div class="bg-yellow-2 pt-8 pb-32">
        @if($products_title)
          <div class="relative relative w-full max-w-[580px] h-[134px] flex items-center justify-center mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="hidden sm:block absolute w-full h-full">
              <path d="M574.373 62.959c-.963-.488-1.926-.964-2.89-1.451-1.096-.3-2.193-.608-3.289-.906l-1.549-.538c-1.533-.039-3.092-.076-4.652-.123a1.8 1.8 0 0 1-.412-.63 36.752 36.752 0 0 1-5.965-.22 3.887 3.887 0 0 0-1.808.033 38.157 38.157 0 0 0-1.619-.127 3.322 3.322 0 0 1-.356-.64c-1.727-.052-3.455-.094-5.182-.146-.482-.239-.991-.466-1.472-.704-.42-1.65 2.31-1.561 3.588-2.433.433-1.139.917-2.37 1.404-3.612-.323-1.275-2.904-1.869-2.483-3.354.886-.123 1.689-1.05 2.721-.177l.639-.054.64-.002c1.376-1.223 3.959-.588 5.978-1.772.578-.98 2.407-2.024 2.185-3.568a16.128 16.128 0 0 0 .874-2.88c.228-2.223 2.495-4.273 1.718-6.561l-.086-.865-.089-2.529c-.364-.07-.705-.15-1.066-.249l-.33-2.306a4.441 4.441 0 0 0-1.282-.047c-1.503-2.377-3.005-4.744-4.451-7.133a2.589 2.589 0 0 0-2.325-1.205c-.349-.427-.67-.845-1.019-1.272a7.797 7.797 0 0 1-4.034-.767c-4.503.178-8.66-.86-13.042-1.115-1.088-.062-2.178-.189-3.267-.286-.68-1.956-1.888-3.834-1.708-5.923.016-.328-.607-.663-.953-.988-.703-.987-1.433-1.971-2.135-2.968-.927-.254-1.828-.518-2.755-.772a22.58 22.58 0 0 0-7.18-.748c-5.387.402-10.83-.091-16.202.7a86.62 86.62 0 0 0-12.343-.343c-5.281.195-10.6.085-15.888.148-2.059.021-4.142.155-6.226.238a2.964 2.964 0 0 0-3.029.147 12.901 12.901 0 0 0-4.663-.436c-8.507.298-17.015.545-25.522.833-11.704.39-30.444.954-42.143 1.496-5.446.252-10.889.607-16.324 1.225a1.047 1.047 0 0 0-1.031-.046 7.336 7.336 0 0 1-.495-.615c-2.718.289-5.433.64-8.153.846-3.636.28-7.305.456-10.943.69-.882.225-1.793.463-2.703.687a15.022 15.022 0 0 0-3.164-.554c-7.595.206-15.18.532-22.77.757-3.67.119-7.344.104-11.015.202-1.613.047-3.194.204-4.805.311-.445-.015-.863-.04-1.31-.054-3.876-.211-7.793.008-11.69-.01-.334.002-.689.325-1.013.485.67.028 1.338.036 1.98.084-.642-.039-1.31-.054-1.98-.084l-.001-.03c-3.399-.082-6.744-.254-10.14-.246s-13.79.392-17.153.57a17.217 17.217 0 0 0-3.092.72c-1.59-.106-3.154-.226-4.743-.313a39.33 39.33 0 0 0-4.097-.143c-6.837.322-13.67.693-20.504 1.076a3.448 3.448 0 0 0-1.125.458l-.616-.111-.637.093a5.298 5.298 0 0 0-4.64.224l-.612.021c-1.946-.732-2.002-.73-3.559.115-2.669.073-5.337.187-8.009.189a21.207 21.207 0 0 1-3.162-.462.8.8 0 0 1-.918.001c-1.353.303-2.68.604-4.032.908a9.827 9.827 0 0 0-2.465-.445c-4.275.344-8.545.8-12.817 1.215a1.38 1.38 0 0 1 .024.674 2.72 2.72 0 0 0-.024-.674c-5.395.17-10.76.336-16.154.505-1.556.055-3.141.09-4.696.134a1.31 1.31 0 0 1-.999.035c-1.048.271-2.068.552-3.116.824a1.45 1.45 0 0 0 .16.587 2.1 2.1 0 0 1-.16-.587c-.472.027-.916.063-1.388.09-1.39.048-2.752.106-4.141.165-.473-.004-.918 0-1.392-.002-5.189-.34-10.1.864-15.088 1.498l-5.648.076c-.935.333-1.841.665-2.778.966-.964.289-1.958.527-2.95.787a3.737 3.737 0 0 0-1.135.203c-.86.101-1.719.193-2.606.291a5.512 5.512 0 0 0 .051.683c-.356.165-.712.33-1.068.486l-8.701.305a16.95 16.95 0 0 0-5.289.778 3.83 3.83 0 0 0-3.476.08c-2.363.073-4.73.084-7.094.218-6.056.334-12.073.842-18.139 1.035a113.145 113.145 0 0 0-14.068 1.248c-6.166-.396-12.34.504-18.492.495a28.7 28.7 0 0 0-8.11 1.275c-1.018.321-2.037.643-3.084.976-.743 1.037-1.486 2.073-2.228 3.12-.35.35-1.088.733-1.02 1.058.35 2.06-.916 4.033-1.542 6.037-1.246.177-2.465.372-3.712.518-4.99.575-9.647 1.92-14.79 2.07a9.942 9.942 0 0 1-4.556 1.06c-.347.452-.72.894-1.067 1.345a3.016 3.016 0 0 0-2.54 1.365c-1.471 2.493-3.055 4.968-4.582 7.45a5.673 5.673 0 0 0-1.443.143c-.084.78-.14 1.546-.224 2.326-.386.125-.772.227-1.19.327.03.846.032 1.694.033 2.53l-.052.87c-.725 2.344 1.986 4.232 2.396 6.418a13.06 13.06 0 0 0 1.184 2.807c-.14 1.558 2.007 2.462 2.735 3.396 2.375 1.03 5.296.203 6.921 1.32l.75-.046.751.005c1.108-.94 2.085-.073 3.117-.017.58 1.45-2.343 2.236-2.604 3.522a264.924 264.924 0 0 0 1.848 3.498c1.528.783 4.637.48 4.25 2.158-.547.274-1.094.539-1.641.813-1.97.169-3.941.352-5.91.523a2.654 2.654 0 0 1-.394.667c-2.491.271-4.818.71-6.476 1.86l-2.487.414a5.398 5.398 0 0 1-3.31.852c-.593.541-1.162 1.072-1.752 1.613-1.434.388-1.664 1.059-1.608 1.802.048.56.179 1.117.255 1.685.392.058.755.117 1.146.154-.775.928-1.244 1.82.424 2.558C5.91 94.246 5.748 95.17 6 96a7.473 7.473 0 0 1 1.285.149c.51.258 1.049.524 1.56.792 1.505 1.648 3.797 2.747 7.289 3.094a12.278 12.278 0 0 1 2.475.73 11.296 11.296 0 0 1 2.977-.043 15.958 15.958 0 0 0 7.229.574c1.194-.154 2.662.499 4.007.778 1.103.523 2.18 1.047 3.283 1.57.34.172.63.488.992.506 2.005.114 4.014.16 6.02.208 1.922.055 3.274.486 4.004 1.483.234.33.993.548 1.504.816.552 1.481-.113 3.139 1.714 4.44-.16.232-.069.421.22.585-.548 1.03-1.85 1.985.302 3.032 1.132.56 1.23 1.758 1.763 2.664 1.467-.235 2.806-.935 4.439-.41.873.275 1.744.53 2.701.824-.102 1.055-.18 2.007-.263 2.827a13.879 13.879 0 0 0 8.663 3.351 7.07 7.07 0 0 0 4.085 1.42c1.924.095 3.773.429 5.646.66a57.052 57.052 0 0 0 7.566.673c4.396-.154 8.744-.673 13.128-1.042 3.276-.268 6.448-1.094 9.884-.734a7.912 7.912 0 0 0 2.847-.57c1.128-.377 2.085-.873 2.852-1.2 2.402.222 4.416.406 6.394.582 1.504.09 3.55-.36 4.386.446 1.642 1.586 4.37.031 6.368.634.676.202 2.295-.447 3.483-.704 1.717.481 3.401.963 5.116 1.444l.966-.033c.92-.778 1.896-1.496 1.302-2.558-.385-.66.975-.728 1.92-.802a4.398 4.398 0 0 0 3.533-.053c1.173.102 2.372.172 3.545.295a3.564 3.564 0 0 0 2.6-.491c.995-.147 2.021-.285 3.018-.433a4.407 4.407 0 0 0 2.977-.063 5.628 5.628 0 0 1 1.548-.28c.395.12.76.239 1.155.368s.787.238 1.153.338l.698.876.001.02c.973-.034 1.89-.087 2.807-.13.473.004.947.008 1.42.022l1.411-.234.643.07.64-.023c.064-.523.13-1.036.195-1.548-.035-.199-.097-.405-.132-.608a4.741 4.741 0 0 1 .132.608c.425.21.822.42 1.247.63l1.253-.044c.082-.073.163-.127.244-.192 2.079 1.366 4.641 1.42 7.522.993 1.246-.187 2.403-.534 3.618-.801a2.188 2.188 0 0 1 .138-.832l.778-.028.776-.088a6.68 6.68 0 0 1 1.465-.296 26.5 26.5 0 0 0 5.47-.376c.733.28 1.467.561 2.23.841a7.653 7.653 0 0 1 1.16-1.154c.334-.011.668-.013 1 .006 3.708.198 7.158-.658 10.75-.641a2.471 2.471 0 0 0 .47.75l.64-.023a39.511 39.511 0 0 0 1.732-.622c.603-.246 1.206-.512 1.81-.778.144.148.317.326.52.564a2.28 2.28 0 0 1 .235.38l.528-.04.53.033c.636-.122 1.554-.115 1.824-.38 1.565-1.423 3.876-1.402 6.124-1.573.392.058.784.116 1.175.16a6.952 6.952 0 0 0 2.825-.4c.385-.146.396-.596.466-.976.167-.006.333-.012.5-.008a6.02 6.02 0 0 1 2.888 3l.612-.022.61-.052c.585.01 1.17.02 1.754.02.61-.062 1.22-.124 1.858-.187.917-.032 1.864-.055 2.809-.078l.001.03c.546-.318 1.147-.621 1.72-.928 1.558-.044 3.115-.089 4.644-.131l3.17-.111a7.345 7.345 0 0 0 1.154.378 3.72 3.72 0 0 0 1.89-.046 5.414 5.414 0 0 0 .52-.283 5.052 5.052 0 0 1 .868.144 12.506 12.506 0 0 0 4.965.306c.81-.703 1.62-1.415 2.701-2.341 1.504.794 2.779 1.454 4.026 2.115l.443-.077.473.015a6.832 6.832 0 0 1 3.504-.878c.576-.234 1.184-.47 1.757-.695a21.981 21.981 0 0 0 7.804.278c2.741.384 10.121-1.09 10.815-1.941a9.19 9.19 0 0 0 2.743.425 38.371 38.371 0 0 0 4.399-1.543l1.24-.343c1.103.502 2.18 1.016 3.282 1.518a11.922 11.922 0 0 0 .97-.84c.086.038.199.085.283.123 1.273 3.743 1.829 4.52 4.247 6.018a429.743 429.743 0 0 0 4.023-1.959l.056-.788a3.784 3.784 0 0 1-.056.788c1.878-.422 3.756-.831 5.91-1.32.776-1.711 2.224-3.294 5.476-4.174 3.35 1.833 5.014 4.062 4.828 6.713a3.877 3.877 0 0 0 3.026-1.822c1.175-2.185 2.017-4.39 1.576-6.65 1.121.225 1.473.734 1.41 1.309-.137 1.659 1.763 2.633 4.119 3.163a9.836 9.836 0 0 0 7.153-.772 27.59 27.59 0 0 1 2.717 1.293c.455.284.339.928.846 1.094 2.703.896 4.998 2.06 7.593 3.022a4.72 4.72 0 0 0 2.168-.086 19.41 19.41 0 0 0 2.498-.988c.463-.271.927-.543 1.391-.804.602-.286 1.233-.564 1.836-.84a1.136 1.136 0 0 0-.21-.442.844.844 0 0 1 .21.442l1.724.684c.915-.093 1.801-.237 2.719-.258a9.55 9.55 0 0 1 1.679.241c.186.535.4 1.069.585 1.593a4.026 4.026 0 0 1 1.283.098c1.995-.17 3.344-.678 3.359-1.874.433-.321.868-.63 1.302-.954 3.175.052 6.32-.752 9.48-.342.538.267 1.076.545 1.614.812 2.673.028 5.503-.244 7.441 1.118a7.572 7.572 0 0 0 2.124.241l7.616-.318.612-.001a2.451 2.451 0 0 1 .236-.396c1.098-1.24 1.126-1.24 3.395-.814.477.096.953.181 1.401.278l3.226-.082c1.055-.068 2.083-.124 3.14-.192l.665-.074.668.008a4.371 4.371 0 0 0 .391-.74l.7-.024.697-.075a8.55 8.55 0 0 1 6.453 2.254l4.527-1.843c2.262-1.38 5-1.114 7.736-.853a.973.973 0 0 0 .271.614c.787 1.023 1.973 1.482 4.18.954a32.278 32.278 0 0 1 3.771-.419c1.78-.062 3.638-.219 4.896.697l1.417-.05c.465-.24.901-.48 1.366-.722.05-.201.069-.41.118-.616-.05.202-.07.41-.118.616.1.507.203 1.015.331 1.52l.75-.026.721-.107c.53.042 1.088.084 1.619.127l1.61-.117 3.17-.08.055-.022c.48-.6.933-1.186 1.413-1.785a18.93 18.93 0 0 1 3.706.146 6.833 6.833 0 0 0 4.27-.436l9.227-.415c.122-.504.243-1.009.392-1.514 2.612-.133 5.458.064 7.778-.457a75.37 75.37 0 0 1 9.172-1.178 6.582 6.582 0 0 1 .253-.724c3.115-.027 4.85-1.47 7.213-2.253a5.046 5.046 0 0 1 4.066.057l.723-.025a3.998 3.998 0 0 1 3.311-1.606c4.42-.155-1.958-.269 2.36-.961 4.207-.679 8.695-.489 12.926-1.27a20.175 20.175 0 0 1 7.558.429c1.6-1.19-3.023-.494-.977-.885.47-.864.94-1.727 1.44-2.593.593-.572 1.185-1.134 1.778-1.706l1.79-1.38c2.222-1.71 5.797-2.95 6.495-5.228.1-.31 1.182-.532 1.696-.846a8.914 8.914 0 0 0 2.224-1.678 21.759 21.759 0 0 0 1.836-3.22c2.106-1.053.974-2.351 1.184-3.542.033-2.226-7.078-4.203-7.045-6.42 2.151-.555 3.466.42 4.955.817a5.067 5.067 0 0 0 4.1-.572c1.014-.424 2.002-.847 3.018-1.26 1.289-.535 2.184-1.19 2.18-2.107 1.625-1.313 3.935-.485 5.904-.687l-.257-.191.215-.208c.582-1.685 1.135-3.368 1.716-5.052 1.423.113 2.874.226 4.298.34.574-1.093.141-2.323 1.834-3.26-.02-.572-.012-1.143-.004-1.716l-.503-1.636" fill="#fff"/>
            </svg>
            <h2 class="relative font-ga text-45px xl:text-6xl text-center">
              {{ $products_title }}
            </h2>
          </div>
        @endif
        <div class="mt-10 lg:mb-[5vw] px-4 lg:px-0 space-y-20 sm:mt-20">
          @if($about_products_first['title'])
            <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 lg:gap-14 max-w-[1046px] mx-auto">
              <div>
                <h3 class="font-ga text-3xl mb-4">
                  {{ $about_products_first['title'] }}
                </h3>
                <div class="space-y-4 text-lg">
                  {!! $about_products_first['text'] !!}
                </div>
              </div>
              <div>
                <img src="{{ wp_get_attachment_image_url($about_products_first['image'], 'large') }}" alt="">
              </div>
            </div>
          @endif
          <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 lg:gap-14 max-w-[1046px] mx-auto">
            <div class="order-2 sm:order-1">
              <img src="{{ wp_get_attachment_image_url($about_products_second['image'], 'large') }}" alt="">
            </div>
            <div class="order-1 sm:order-2">
              <h3 class="font-ga text-3xl mb-4">
                {{ $about_products_second['title'] }}
              </h3>
              <div class="space-y-4 text-lg">
                {!! $about_products_second['text'] !!}
              </div>
            </div>
          </div>
          <div class="flex justify-center">
            <a href="{{ get_permalink(get_page_by_path('our-products')) }}" class="block font-ga text-25px bg-green-1 text-white text-center w-full max-w-[348px] mx-auto lg:mx-0 py-4 rounded-full">
              {{ __('Our products', 'code') }}
            </a>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection
