@extends('layouts.app')

@section('content')
  @include('partials.page-header')


  <div id="qui_suis_je">

      <h2>{!! $titre !!}</h2>

      <div class="qui_suis_je_content">

        <div class="text">
          @while(have_posts()) @php the_post() @endphp
            @php the_content(); @endphp
          @endwhile
        </div>

        {!! wp_get_attachment_image($photo , array('400', '300'), "", array( "class" => "img_qui_suis_je", "alt" => "ma tête" ) ) !!}
        
        {!! wp_get_attachment_image($triangle , array('600', '800'), "", array( "class" => "triangle_qui_suis_je", "alt" => "triangle" ) ) !!}

        {!! wp_get_attachment_image($ligne_directrice_2 , array('500', '430'), "", array( "class" => "ligne_directrice_2", "alt" => "ligne" ) ) !!}

      </div>

  </div>

  <div id="reas_prog">

    <div class="popup_prog">

      @foreach($get_reas_prog as $rea)
        @include('partials.popup-content')
      @endforeach

      {!! wp_get_attachment_image($croix , array('400', '300'), "", array( "class" => "cross_prog", "alt" => "croix" ) ) !!}

    </div>

    <h2>{!! $titre_reas_prog !!}</h2>

    <div class="grid_container">
      
      @foreach($get_reas_prog as $rea)
    
        <div class="rea_square_prog" data-name="{{$rea->post_title}}" style="background-image: url({!! wp_get_attachment_url($rea->photo) !!})">

          <h3>{{$rea->post_title}}</h3>
          <div class="filter"></div>

        </div>
        
      @endforeach

    </div>

  </div>

  <div id="reas_art">

    <div class="popup_art">

      @foreach($get_reas_art as $rea)
        @include('partials.popup-content')
      @endforeach

      {!! wp_get_attachment_image($croix , array('400', '300'), "", array( "class" => "cross_art", "alt" => "croix" ) ) !!}

    </div>

    <h2>{!! $titre_reas_art !!}</h2>

    <div class="grid_container">
    
      @foreach($get_reas_art as $rea)
      
          <div class="rea_square_art" data-name="{{$rea->post_title}}" style="background-image: url({!! wp_get_attachment_url($rea->photo) !!})">

            <h3>{{$rea->post_title}}</h3>
            <div class="filter"></div>
            
          </div>

      @endforeach

    </div>

  </div>

  <div id="contact">

      <h2>{!! $titre_contact !!}</h2>

      <div class="contact_content">

        <a href="{!! $lien_insta_1 !!}" class="insta_1">
          {!! wp_get_attachment_image($logo_insta , array('50', '200'), "", array( "class" => "img_qui_suis_je", "alt" => "ma tête" ) ) !!}
          <p>{!! $nom_insta_1 !!}</p>
        </a>

        <a href="{!! $lien_insta_2 !!}" class="insta_2">
          {!! wp_get_attachment_image($logo_insta , array('50', '200'), "", array( "class" => "img_qui_suis_je", "alt" => "ma tête" ) ) !!}
          <p>{!! $nom_insta_2 !!}</p>
        </a>

        <a href="{!! $lien_linkedin !!}" class="linkedin">
          {!! wp_get_attachment_image($logo_linkedin , array('50', '200'), "", array( "class" => "img_qui_suis_je", "alt" => "ma tête" ) ) !!}
          <p>{!! $nom_linkedin !!}</p>
        </a>

        <div class="mail">
          {!! wp_get_attachment_image($logo_mail , array('50', '300'), "", array( "class" => "img_qui_suis_je", "alt" => "ma tête" ) ) !!}
          <p>{!! $mail !!}</p>
        </div>

      </div>

  </div>
  

@endsection
