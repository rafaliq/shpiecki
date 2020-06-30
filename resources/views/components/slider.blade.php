@php
  $slider = $data['slider'];
@endphp

<section>
  <div class="main-carousel">
      @foreach ($slider as $item)
        <div class="slider carousel-cell">
          <img class="slider__bg" src="{{ $item['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
          {{-- <div class="container">
            <div class="slider__content">
              <h1>
                <span class="headline slider__title">
                  {{ $item['title'] }}
                </span>
              </h1>
              <div class="text slider__text">
                {!! $item['desc'] !!}
              </div>
              <div class="slider__button">
                <a class="button button--light" href="{{ $item['link']['url'] }}">
                  {{ $item['link']['title'] }}
                </a>
              </div>
            </div>
          </div> --}}
        </div>
      @endforeach
  </div>
</section>