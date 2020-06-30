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
      @foreach($data['images'] as $item)
        <a href="{{ $item['link']['url'] }}" class="boxes-img__box">
          <img class="boxes-img__img" src="{{ $item['image']['url'] }}">
          <h3 class="title title--small boxes-img__title">
            {{ $item['titleImg'] }}
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