<div class="hero">
  <div class="container">
    <h1 class="hero__title">
      <span class="headline">
        {!! get_the_title() !!}
      </span>
    </h1>
  </div>
  <img src="{{ get_the_post_thumbnail_url() }}" alt="{{ get_the_title() }}" class="hero__bg">
</div>
<div class="container @if(!is_page()) content-page section @endif">
  <article @php post_class() @endphp>
      <header>
        <!-- <h1 class="entry-title">{{ get_the_title() }}</h1>
          @include('partials/entry-meta') -->
        <div>
          <h1 class="title title--primary mb-4">
            @php the_title() @endphp
          </h1>
        </div>
      </header>
      <div class="entry-content">
        <div class="pt-2">
          @php the_content() @endphp
        </div>
      </div>
      <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      </footer>
      {{-- @php comments_template('/partials/comments.blade.php') @endphp --}}
  </article>
</div>
