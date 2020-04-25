<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <!-- Afficher titre homePage -->
    <h1><?php single_cat_title() ?></h1>

    <!-- afficher les posts -->
    <?php if(have_posts()) : while(have_posts()) : the_post();?>
    <div class="card mb-4">
        <div class="card-body">

        <!-- Grande image à l'ouverture de l'article -->
        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
        <?php endif;?>

        <!-- Afficher le titre de l'article -->
        <h3><?php the_title();?></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>
        </div>
    </div>
    <?php endwhile; endif; ?>
</div>




<?php get_footer(); ?>