@if(get_field('show_map'))
  <section class="contact">
    <div class="container">
      <header class="contact__header">
        <address class="contact__block">
          <h3 class="title title--dark contact__title">
            {{ get_option_field("person") }}
          </h3>
          <p>
            kom. 
            <a href="tel:{{ str_replace(' ','', get_option_field('phone')) }}" class="contact__link">
              {{ get_option_field("phone2") }}
            </a>
            <br>
            tel. 
            <a href="tel:{{ str_replace(' ','', get_option_field('phone')) }}" class="contact__link">
              {{ get_option_field("phone") }}
            </a>
            <br>
            e-mail: 
            <a href="mailto:{{ get_option_field("email") }}" class="contact__link">
              {{ get_option_field("email") }}
            </a>
          </p>
        </address>
        <address class="contact__block contact__block--right">
          <h3 class="title title--dark contact__title">
            {{ get_option_field("name") }}
          </h3>
          <p>
            {!! get_option_field("address") !!}
          </p>
        </address>
      </header>
    </div>
  </section>
  <section>
    @include('components.map')
  </section>
@endif
<footer class="footer">
  <div class="container">
    <div class="footer__row">
      <div class="text footer__copyright">
        {{ get_option_field("copyright") }}
      </div>
      <div class="footer__logo">
        <a href="http://iqconnect.pl">
          <img src="{{ get_option_field('iqlogo')['url'] }}" alt="{{ get_option_field('iqlogo')['alt'] }}">
        </a>
      </div>
    </div>
  </div>
</footer>
