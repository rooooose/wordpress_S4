@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
  archive type
    @include('partials.content-'.get_post_type())
  @endwhile

  {{$get_reas_prog}}

  @while ($get_reas_prog->have_posts())
    @php 
      $get_reas_prog->the_post();
    @endphp
  @endwhile


  {!! get_the_posts_navigation() !!}
@endsection
