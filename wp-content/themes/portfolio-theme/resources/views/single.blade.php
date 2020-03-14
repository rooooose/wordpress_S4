@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  single ttttt - {{ $titre }}
  @debug()
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
