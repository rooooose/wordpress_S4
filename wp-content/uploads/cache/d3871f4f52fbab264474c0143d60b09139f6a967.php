<div class="rea_content" data-name="<?php echo e($rea->post_title); ?>">

  <div class="infos">
    <h4><?php echo e($rea->post_title); ?></h4>
    <?php echo wp_get_attachment_image($soulignement , array('600', '300'), "", array( "class" => "soulignement", "alt" => "soulignement" ) ); ?>

    <p class="subtitle"> <span><?php echo e($rea->annee); ?></span> - <?php echo e($rea->techno); ?></p>
    <p></p>
    <?php if($rea->demande): ?> 
      <p><span class="instructions">La demande</span> : <?php echo e($rea->demande); ?></p>
    <?php endif; ?>
    <p><?php echo e($rea->description); ?></p>
    <?php if($rea->lien): ?>
      <a href="<?php echo e($rea->lien); ?>">En voir plus</a>
    <?php endif; ?>
    <?php echo wp_get_attachment_image($triangle_pop_up , array('800', '800'), "", array( "class" => "triangle_popup", "alt" => "triangle popup" ) ); ?>

  </div>
  

  <div class="images">
    <?php echo wp_get_attachment_image($rea->photo , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo $rea->post_title" ) ); ?>

    <?php echo wp_get_attachment_image($rea->photo_2 , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo 2 $rea->post_title" ) ); ?>

  </div>
  
</div>

  
