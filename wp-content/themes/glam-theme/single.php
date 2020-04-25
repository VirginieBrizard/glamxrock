<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <!-- Afficher titre homePage -->
    <h1><?php the_title() ?></h1>

    <!-- Petite image dans la miniature -->
    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">
    <?php endif;?>


    <!-- Afficher les posts -->
    <?php get_template_part('include/section','content'); ?>
    <?php the_content(); ?> 
    
</div>




<?php get_footer(); ?>