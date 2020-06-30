@extends('layouts.app')

@section('content')
  @php
      $section = get_field('components', 125);
      $hero = $section[0];
  @endphp
  @include('components.hero', ['data'=>$hero])
  <div class="container content-page">
    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php the_post() @endphp
      @include('partials.content-'.get_post_type())
      <hr class="post-item__hr">
    @endwhile

    {!! get_the_posts_navigation() !!}
  </div>
@endsection
