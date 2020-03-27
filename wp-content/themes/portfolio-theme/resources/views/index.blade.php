@extends('layouts.app')

@section('content')
  @include('partials.page-header')

 <!--  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
  archive type
    @include('partials.content-'.get_post_type())
  @endwhile -->


  <div id="reas_prog">
    
    @foreach($get_reas_prog as $rea)
        <h2>{{$rea->post_title}}</h2>
        <p>{{$rea->techno}}</p>
        <p>{{$rea->annee}}</p>
        <h3>La demande :</h3>
        <p>{{$rea->demande}}</p>
        <p>{{$rea->description}}</p>
        {!! wp_get_attachment_image($rea->photo , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo $rea->post_title" ) ) !!}
        {!! wp_get_attachment_image($rea->photo_2 , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo 2 $rea->post_title" ) ) !!}
    @endforeach

  </div>

  <div id="reas_art">
    
    @foreach($get_reas_art as $rea)
        <h2>{{$rea->post_title}}</h2>
        <p>{{$rea->techno}}</p>
        <p>{{$rea->annee}}</p>

        @if($rea->demande)
          <h4>La demande :</h4>
        @endif

        <p>{{$rea->demande}}</p>
        <p>{{$rea->description}}</p>
        {!! wp_get_attachment_image($rea->photo , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo $rea->post_title" ) ) !!}
        {!! wp_get_attachment_image($rea->photo_2 , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo 2 $rea->post_title" ) ) !!}
    @endforeach

  </div>
 


@endsection
