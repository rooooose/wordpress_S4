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



 @foreach($get_reas_prog as $rea)
      {{$rea->post_title}}
      {{$rea->techno}}
  @endforeach


  {!! get_the_posts_navigation() !!}
@endsection
