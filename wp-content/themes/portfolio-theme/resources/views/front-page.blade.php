@extends('layouts.app')

@section('content')
  @include('partials.page-header')


  <div id="qui_suis_je">

      <h2>{!! $titre !!}</h2>
      <p>{!! $texte !!}</p>
      {!! wp_get_attachment_image($photo , array('400', '300'), "", array( "class" => "img_qui_suis_je", "alt" => "ma tête" ) ) !!}


  </div>

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
          <h3>La demande :</h3>
        @endif

        <p>{{$rea->demande}}</p>
        <p>{{$rea->description}}</p>
        {!! wp_get_attachment_image($rea->photo , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo $rea->post_title" ) ) !!}
        {!! wp_get_attachment_image($rea->photo_2 , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo 2 $rea->post_title" ) ) !!}
    @endforeach

  </div>
 


@endsection
