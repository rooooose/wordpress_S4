<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php if(!have_posts()): ?>
    <div class="alert alert-warning">
      <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

    </div>
    <?php echo get_search_form(false); ?>

  <?php endif; ?>

  <?php while(have_posts()): ?> <?php the_post() ?>
  archive type
    <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php
    $taxonomy = 'item_type';
    $args1=array(
        'include'=> array(12,30)
        );

    $terms = get_terms('item_type',$args1 );
    echo '<ul>';


    foreach ($terms as $term) {
        //Always check if it's an error before continuing. get_term_link() can be finicky sometimes
        $term_link = get_term_link( $term, 'item_type' );
        if( is_wp_error( $term_link ) )
            continue;
        //We successfully got a link. Print it out.


        echo '<li><a href="' . $term_link . '">' . $term->name . '</a></li>';
    }
    echo '</ul>';
    ?>
    
  <?php endwhile; ?>

  

  <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>