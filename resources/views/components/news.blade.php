@php
$args = array(
  'posts_per_page'   => 2,
  'offset'           => 0,
  'orderby' => 'date',
  'order'    => 'ASC',
  'post_type'        => 'post',
  'post_status'      => 'publish',
  'suppress_filters' => true,
);
$posts = get_posts($args);
@endphp

<section class="section section--color">
  <div class="container">
    <h2 class="title text--center">
      Aktualności
    </h2>
    <div class="text section__desc">
      {!! $data['desc'] !!}
    </div>
    <div class="news">
      @foreach($posts as $item)
        <a href="{{ get_permalink($item->ID) }}" class="news__box">
          <div class="news__cover">
            <img class="boxes-img__img" src="{{ wp_get_attachment_url(get_post_thumbnail_id($item->ID)) }}">
            <span class="news__cat">
              {{ get_the_category($item->ID)[0]->name }}
            </span>
          </div>
          <div class="news__content">
            <h3 class="title title--small news__title">
              {{ $item->post_title }}
            </h3>
            <p class="text news__text">
              {{ $item->post_excerpt }}
            </p>
          </div>
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