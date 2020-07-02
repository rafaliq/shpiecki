<section class="section">
  <div class="container text-img">
      <div class="text-img__img">
        <img class="text-img__photo" src="{{ $data['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
      </div>
      <div class="text-img__content">
        <div>
          @if($data['header'] == 'tak')
            <h2 class="title">
              {{ $data['title'] }}
            </h2>
          @endif
          <div class="text">
            {!! $data['content'] !!}
          </div>
          @if($data['button'] == 'tak')
            <div class="text-img__button">
              <a href="{{ $data['link']['url'] }}" class="button">
                Więcej
              </a>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>