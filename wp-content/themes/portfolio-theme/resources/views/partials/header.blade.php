<header>
  <div class="container">
    <!-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> -->
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>

    <div class="presentation">
    	{!! wp_get_attachment_image($logo , array('350', '250'), "", array( "class" => "logo", "alt" => "mon logo" ) ) !!}
    	<p>{!! $intro_1 !!}</p>
    	<p>{!! $intro_2 !!}</p>
      {!! wp_get_attachment_image($triangle_1 , array('850', '750'), "", array( "class" => "triangle1", "alt" => "triangle header gauche" ) ) !!}
      {!! wp_get_attachment_image($triangle_2 , array('650', '550'), "", array( "class" => "triangle2", "alt" => "triangle header droite" ) ) !!}
      {!! wp_get_attachment_image($ligne_directrice , array('650', '550'), "", array( "class" => "ligne1", "alt" => "ligne directrice header" ) ) !!}
    </div>
    

  </div>
</header>
