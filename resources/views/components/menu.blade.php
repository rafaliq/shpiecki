<section class="section">
  <div class="container">
    @if($data['title'])
      @include('partials.title', ['title' => $data['title'], 'menu' => get_option_field("menu-pdf")])
    @endif
  </div>
    <div class="menu">
      <div class="container">
        <div class="menu__buttons">
          @foreach(get_option_field("menu") as $item)
            <a href="#" class="menu__button @if($loop->first) menu__button--active @endif" menu-button="{{ $item['content']['title'] }}">
              {{ $item['content']['title'] }}
            </a>
          @endforeach
        </div>
      </div>
      <div class="menu__main text">
        @foreach(get_option_field("menu") as $item)
          @php
            $bg = $item['content']['bg']
          @endphp
          <div class="menu__bg @if($loop->first) menu__bg--active @endif" menu-bg="{{ $item['content']['title'] }}">
            <img class="menu__img" src="{{ $bg['url'] }}" alt="{{ $bg['alt'] }}">
          </div>
        @endforeach
        @foreach(get_option_field("menu") as $item)
          @php
            $content = $item['content']
          @endphp
          <div class="container menu__content @if($loop->first) menu__content--active @endif" menu-content="{{ $item['content']['title'] }}">
            @php
              $countrows = count($content['list'])/2;
            @endphp
            @if($content['menu-type'] == 'pizza')
              <div class="menu__columns menu__columns--size">
                <div class="menu__row menu__row--th menu__row--col3">
                  <div>
                  </div>
                  <div class="text--center">
                    {!! $content['size1'] !!}
                  </div>
                  <div class="text--center">
                    {!! $content['size2'] !!}
                  </div>
                </div>
                <div class="menu__row menu__row--th menu__row--col3">
                  <div>
                  </div>
                  <div class="text--center">
                    {!! $content['size1'] !!}
                  </div>
                  <div class="text--center">
                    {!! $content['size2'] !!}
                  </div>
                </div>
              </div>
            @endif
            <div class="menu__columns @if($content['columns'] == '1') menu__columns--one @endif" style="grid-auto-flow: column; grid-template-rows: repeat({{ round($countrows) }}, 1fr);">
              @foreach($content['list'] as $item)
                <div class="menu__row @if($content['columns'] == '1') menu__row--space @endif @if($content['menu-type'] == 'pizza') menu__row--col3 @endif">
                    <div>
                      <span class="text--bold">
                        @if(($content['menu-type'] == 'pizza') && (strpos($item['name'], 'Dodatki') === false))
                          {{ $loop->index+1 }}.
                        @endif
                        {{ $item['name'] }}
                      </span>
                      @if($item['desc'])
                        <br>
                        ({{ $item['desc'] }})
                      @endif
                    </div>
                    <div class="text--center">
                      {{ $item['price'] }} zł
                    </div>
                    @if($content['menu-type'] == 'pizza')
                      <div class="text--center">
                        @if($item['price2'])
                          {{ $item['price2'] }} zł
                        @endif
                      </div>
                    @endif
                </div>
              @endforeach
            </div>
            @if($content['twolist'] == 'tak')
              <div class="menu__table">
                <span class="text text--bold text--primary menu__title">
                  {{ $content['list2title'] }}
                </span>
                <div class="menu__columns menu__columns--one">
                  @foreach($content['list2'] as $item)
                    <div class="menu__row menu__row--space">
                      <div>
                        <span class="text--bold">
                          {{ $item['name'] }}
                        </span>
                      </div>
                      <div class="text--center">
                        {{ $item['price'] }} zł
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            @endif
            @if($content['desc'])
              <div class="text menu__text">
                {!! $content['desc'] !!}
              </div>
            @endif
          </div>
        @endforeach
      </div>
    </div>
</section>