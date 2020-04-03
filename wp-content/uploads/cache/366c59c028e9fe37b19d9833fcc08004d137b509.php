<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <!-- <?php if(!have_posts()): ?>
    <div class="alert alert-warning">
      <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

    </div>
    <?php echo get_search_form(false); ?>

  <?php endif; ?>

  <?php while(have_posts()): ?> <?php the_post() ?>
  archive type
    <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endwhile; ?> -->

  <div id="qui_suis_je">
    
<!--     <?php $post_title = get_field('post_title'); ?> -->
  <!-- <?php $__currentLoopData = $get_qui_suis_je; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qui_suis_je): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> -->

  <?php if($get_qui_suis_je): ?>
       <h2><?php echo $get_qui_suis_je->post_title; ?></h2>
       <p><?php echo $get_qui_suis_je->texte; ?></p> 
  <?php endif; ?>

        <!-- <h2><?php echo e($post_title); ?></h2> -->

 <!--  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
 -->
  <!-- <?php (new Illuminate\Support\Debug\Dumper)->dump($get_qui_suis_je); ?>; -->

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