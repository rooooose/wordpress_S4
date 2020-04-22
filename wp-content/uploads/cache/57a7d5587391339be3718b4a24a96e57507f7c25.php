<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  <div id="qui_suis_je">

      <h2><?php echo $titre; ?></h2>

      <div class="qui_suis_je_content">

        <div class="text">
          <?php while(have_posts()): ?> <?php the_post() ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div>

        <?php echo wp_get_attachment_image($photo , array('400', '300'), "", array( "class" => "img_qui_suis_je", "alt" => "ma tête" ) ); ?>

        
        <?php echo wp_get_attachment_image($triangle , array('600', '800'), "", array( "class" => "triangle_qui_suis_je", "alt" => "triangle" ) ); ?>


        <?php echo wp_get_attachment_image($ligne_directrice_2 , array('500', '430'), "", array( "class" => "ligne_directrice_2", "alt" => "ligne" ) ); ?>


      </div>

  </div>

  <div id="reas_prog">

    <div class="popup_prog">

      <?php $__currentLoopData = $get_reas_prog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('partials.popup-content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <?php echo wp_get_attachment_image($croix , array('400', '300'), "", array( "class" => "cross_prog", "alt" => "croix" ) ); ?>


    </div>

    <h2><?php echo $titre_reas_prog; ?></h2>

    <div class="grid_container">
      
      <?php $__currentLoopData = $get_reas_prog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
        <div class="rea_square_prog" data-name="<?php echo e($rea->post_title); ?>" style="background-image: url(<?php echo wp_get_attachment_url($rea->photo); ?>)">

          <h3><?php echo e($rea->post_title); ?></h3>
          <div class="filter"></div>

        </div>
        
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

  </div>

  <div id="reas_art">

    <div class="popup_art">

      <?php $__currentLoopData = $get_reas_art; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('partials.popup-content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <?php echo wp_get_attachment_image($croix , array('400', '300'), "", array( "class" => "cross_art", "alt" => "croix" ) ); ?>


    </div>

    <h2><?php echo $titre_reas_art; ?></h2>

    <div class="grid_container">
    
      <?php $__currentLoopData = $get_reas_art; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
          <div class="rea_square_art" data-name="<?php echo e($rea->post_title); ?>" style="background-image: url(<?php echo wp_get_attachment_url($rea->photo); ?>)">

            <h3><?php echo e($rea->post_title); ?></h3>
            <div class="filter"></div>
            
          </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

  </div>

  <div id="contact">

      <h2><?php echo $titre_contact; ?></h2>

      <div class="contact_content">

        <a href="<?php echo $lien_insta_1; ?>" class="insta_1">
          <?php echo wp_get_attachment_image($logo_insta , array('50', '200'), "", array( "class" => "img_qui_suis_je", "alt" => "ma tête" ) ); ?>

          <p><?php echo $nom_insta_1; ?></p>
        </a>

        <a href="<?php echo $lien_insta_2; ?>" class="insta_2">
          <?php echo wp_get_attachment_image($logo_insta , array('50', '200'), "", array( "class" => "img_qui_suis_je", "alt" => "ma tête" ) ); ?>

          <p><?php echo $nom_insta_2; ?></p>
        </a>

        <a href="<?php echo $lien_linkedin; ?>" class="linkedin">
          <?php echo wp_get_attachment_image($logo_linkedin , array('50', '200'), "", array( "class" => "img_qui_suis_je", "alt" => "ma tête" ) ); ?>

          <p><?php echo $nom_linkedin; ?></p>
        </a>

        <div class="mail">
          <?php echo wp_get_attachment_image($logo_mail , array('50', '300'), "", array( "class" => "img_qui_suis_je", "alt" => "ma tête" ) ); ?>

          <p><?php echo $mail; ?></p>
        </div>

      </div>

  </div>
  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>