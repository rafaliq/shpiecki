<section class="store">
  <div class="container">
    <div class="products-carousel store__slider">
      @foreach($data['products'] as $product)
        <div class="store__product carousel-cell">
          <div class="store__image">
            <img src="{{ $product['image']['url'] }}" alt="{{ $product['image']['alt'] }}">
          </div>
          <div class="store__info">
            <h2>
              <span class="title title--medium">
                {{ $product['title'] }}
              </span>
            </h2>
            @if($product['link'])
              <a href="{{ $product['link']['url'] }}" class="button button--info store__button">
                {{ $product['link']['title'] }}
              </a>
            @endif
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>