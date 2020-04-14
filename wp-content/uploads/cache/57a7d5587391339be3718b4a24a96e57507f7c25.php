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

        <div class="image">
        </div>
        
        <?php echo wp_get_attachment_image($triangle , array('600', '800'), "", array( "class" => "triangle_qui_suis_je", "alt" => "triangle" ) ); ?>


        <?php echo wp_get_attachment_image($ligne_directrice_2 , array('500', '430'), "", array( "class" => "ligne_directrice_2", "alt" => "ligne" ) ); ?>


      </div>

  </div>

  <div id="reas_prog">

    <h2><?php echo $titre_reas_prog; ?></h2>
    
    <?php $__currentLoopData = $get_reas_prog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
        <div class="rea_square" data-name="<?php echo e($rea->post_title); ?>">

          <h3><?php echo e($rea->post_title); ?></h3>

        </div>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>

  <div id="reas_art">

    <h2><?php echo $titre_reas_art; ?></h2>
    
    <?php $__currentLoopData = $get_reas_art; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="rea_square" data-name="<?php echo e($rea->post_title); ?>">
          <h3><?php echo e($rea->post_title); ?></h3>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>

  <div class="popup">

    <?php $__currentLoopData = $get_reas_prog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="rea_content" data-name="<?php echo e($rea->post_title); ?>">
        <h2><?php echo e($rea->post_title); ?></h2>
        <p><?php echo e($rea->techno); ?></p>
        <p><?php echo e($rea->annee); ?></p>
        <h3>La demande :</h3>
        <p><?php echo e($rea->demande); ?></p>
        <p><?php echo e($rea->description); ?></p>
        <?php echo wp_get_attachment_image($rea->photo , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo $rea->post_title" ) ); ?>

        <?php echo wp_get_attachment_image($rea->photo_2 , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo 2 $rea->post_title" ) ); ?>

      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <?php $__currentLoopData = $get_reas_art; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="rea_content" data-name="<?php echo e($rea->post_title); ?>">
        <h2><?php echo e($rea->post_title); ?></h2>
        <p><?php echo e($rea->techno); ?></p>
        <p><?php echo e($rea->annee); ?></p>
        <h3>La demande :</h3>
        <p><?php echo e($rea->demande); ?></p>
        <p><?php echo e($rea->description); ?></p>
        <?php echo wp_get_attachment_image($rea->photo , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo $rea->post_title" ) ); ?>

        <?php echo wp_get_attachment_image($rea->photo_2 , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo 2 $rea->post_title" ) ); ?>

      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
  
        
 


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>