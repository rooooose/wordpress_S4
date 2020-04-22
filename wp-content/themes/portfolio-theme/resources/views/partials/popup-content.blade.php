<div class="rea_content" data-name="{{$rea->post_title}}">

  <div class="infos">
    <h4>{{$rea->post_title}}</h4>
    {!! wp_get_attachment_image($soulignement , array('600', '300'), "", array( "class" => "soulignement", "alt" => "soulignement" ) ) !!}
    <p class="subtitle"> <span>{{$rea->annee}}</span> - {{$rea->techno}}</p>
    <p></p>
    @if($rea->demande) 
      <p><span class="instructions">La demande</span> : {{$rea->demande}}</p>
    @endif
    <p>{{$rea->description}}</p>
    @if($rea->lien)
      <a href="{{$rea->lien}}">En voir plus</a>
    @endif
    {!! wp_get_attachment_image($triangle_pop_up , array('800', '800'), "", array( "class" => "triangle_popup", "alt" => "triangle popup" ) ) !!}
  </div>
  

  <div class="images">
    {!! wp_get_attachment_image($rea->photo , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo $rea->post_title" ) ) !!}
    {!! wp_get_attachment_image($rea->photo_2 , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo 2 $rea->post_title" ) ) !!}
  </div>
  
</div>

  
