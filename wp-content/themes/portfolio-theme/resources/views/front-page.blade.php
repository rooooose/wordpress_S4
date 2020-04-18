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
        <div class="image">
        </div>
        
        {!! wp_get_attachment_image($triangle , array('600', '800'), "", array( "class" => "triangle_qui_suis_je", "alt" => "triangle" ) ) !!}

        {!! wp_get_attachment_image($ligne_directrice_2 , array('500', '430'), "", array( "class" => "ligne_directrice_2", "alt" => "ligne" ) ) !!}

      </div>

  </div>

  <div id="reas_prog">

    <div class="popup_prog">

      {!! wp_get_attachment_image($croix , array('400', '300'), "", array( "class" => "cross_prog", "alt" => "croix" ) ) !!}

      @foreach($get_reas_prog as $rea)
        <div class="rea_content" data-name="{{$rea->post_title}}">
          <h2>{{$rea->post_title}}</h2>
          <p>{{$rea->techno}}</p>
          <p>{{$rea->annee}}</p>
          <h3>La demande :</h3>
          <p>{{$rea->demande}}</p>
          <p>{{$rea->description}}</p>
          {!! wp_get_attachment_image($rea->photo , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo $rea->post_title" ) ) !!}
          {!! wp_get_attachment_image($rea->photo_2 , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo 2 $rea->post_title" ) ) !!}
        </div>
      @endforeach

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
    
      {!! wp_get_attachment_image($croix , array('400', '300'), "", array( "class" => "cross_art", "alt" => "croix" ) ) !!}

      @foreach($get_reas_art as $rea)
        <div class="rea_content" data-name="{{$rea->post_title}}">
          <h2>{{$rea->post_title}}</h2>
          <p>{{$rea->techno}}</p>
          <p>{{$rea->annee}}</p>
          <h3>La demande :</h3>
          <p>{{$rea->demande}}</p>
          <p>{{$rea->description}}</p>
          {!! wp_get_attachment_image($rea->photo , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo $rea->post_title" ) ) !!}
          {!! wp_get_attachment_image($rea->photo_2 , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo 2 $rea->post_title" ) ) !!}
        </div>
      @endforeach

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
  

@endsection
