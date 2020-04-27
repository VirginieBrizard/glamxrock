<?php get_header(); ?>

<div class="hero">
    <div class="container pt-5 pb-5">
        <!-- Afficher les posts / Le contenu -->
        <?php get_template_part('include/section','content'); ?>

        <div class="content container">
        <?php the_content(); ?>

        <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>

        </div>
    </div>
</div>



<?php get_footer(); ?>