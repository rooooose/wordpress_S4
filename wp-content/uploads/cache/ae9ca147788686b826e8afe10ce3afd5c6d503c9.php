<header>
  <div class="container">
    <!-- <a class="brand" href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a> -->
    <nav class="nav-primary">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>

    <div class="presentation">
    	<?php echo wp_get_attachment_image($logo , array('350', '250'), "", array( "class" => "logo", "alt" => "mon logo" ) ); ?>

    	<p><?php echo $intro_1; ?></p>
    	<p><?php echo $intro_2; ?></p>
      <?php echo wp_get_attachment_image($triangle_1 , array('850', '750'), "", array( "class" => "triangle1", "alt" => "triangle header gauche" ) ); ?>

      <?php echo wp_get_attachment_image($triangle_2 , array('650', '550'), "", array( "class" => "triangle2", "alt" => "triangle header droite" ) ); ?>

      <?php echo wp_get_attachment_image($ligne_directrice , array('650', '550'), "", array( "class" => "ligne1", "alt" => "ligne directrice header" ) ); ?>

    </div>
    

  </div>
</header>
