<section>
  <div class="hero">
    <div class="container">
      <h1 class="hero__title">
        <span class="headline">
          @if($category) 
            {{ single_cat_title() }}
          @else
            {{ $data['title'] }}
          @endif
        </span>
      </h1>
    </div>
    <img src="{{ $data['bg']['url'] }}" alt="{{ $date['bg']['title'] }}" class="hero__bg">
  </div>
</section>