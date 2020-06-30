
@php
$args = array(
  'posts_per_page'   => 4,
  'offset'           => 0,
  'orderby' => 'date',
  'order'    => 'ASC',
  'post_type'        => 'placowki',
  'post_status'      => 'publish',
  'suppress_filters' => true,
);
$shops = get_posts($args);
@endphp

<section class="section section--color">
  <div class="container">
    @if($data['header'] == 'tak')
      <h2 class="title text--center">
        {{ $data['title'] }}
      </h2>
    @endif
    <div class="text section__desc">
      {!! $data['desc'] !!}
    </div>
    <div class="boxes-img">
      @foreach($shops as $item)
        <a href="{{ get_permalink($item->ID) }}" class="boxes-img__box">
          <img class="boxes-img__img" src="{{ wp_get_attachment_url(get_post_thumbnail_id($item->ID)) }}">
          <h3 class="title title--small boxes-img__title">
            {{ $item->post_title }}
          </h3>
        </a>
      @endforeach
    </div>
    @if($data['link'])
      <div class="boxes-img__button">
        <a href="{{ $data['link']['url'] }}" class="button">
          Więcej
        </a>
      </div>
    @endif
  </div>
</section>