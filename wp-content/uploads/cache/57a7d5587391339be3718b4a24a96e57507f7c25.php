<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  <div id="qui_suis_je">

      <h2><?php echo $titre; ?></h2>
      <p><?php echo $texte; ?></p>
      <?php echo wp_get_attachment_image($photo , array('400', '300'), "", array( "class" => "img_qui_suis_je", "alt" => "ma tête" ) ); ?>



  </div>

  <div id="reas_prog">
    
    <?php $__currentLoopData = $get_reas_prog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2><?php echo e($rea->post_title); ?></h2>
        <p><?php echo e($rea->techno); ?></p>
        <p><?php echo e($rea->annee); ?></p>
        <h3>La demande :</h3>
        <p><?php echo e($rea->demande); ?></p>
        <p><?php echo e($rea->description); ?></p>
        <?php echo wp_get_attachment_image($rea->photo , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo $rea->post_title" ) ); ?>

        <?php echo wp_get_attachment_image($rea->photo_2 , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo 2 $rea->post_title" ) ); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>

  <div id="reas_art">
    
    <?php $__currentLoopData = $get_reas_art; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2><?php echo e($rea->post_title); ?></h2>
        <p><?php echo e($rea->techno); ?></p>
        <p><?php echo e($rea->annee); ?></p>

        <?php if($rea->demande): ?>
          <h3>La demande :</h3>
        <?php endif; ?>

        <p><?php echo e($rea->demande); ?></p>
        <p><?php echo e($rea->description); ?></p>
        <?php echo wp_get_attachment_image($rea->photo , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo $rea->post_title" ) ); ?>

        <?php echo wp_get_attachment_image($rea->photo_2 , array('400', '300'), "", array( "class" => "img_reas", "alt" => "photo 2 $rea->post_title" ) ); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
 


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>