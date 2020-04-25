<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <!-- Afficher titre homePage -->
    <h1><?php the_title() ?></h1>
    <!-- Afficher les posts -->
    <?php get_template_part('includes/section','content'); ?>


</div>




<?php get_footer(); ?>