<?php get_header(); ?>

<section class="page-wrap">
<div class="container pt-5 pb-5">
    <!-- Afficher titre homePage -->
    <h1><?php the_title() ?></h1>
    <!-- Afficher les posts / Le contenu -->
    <?php get_template_part('include/section','content'); ?>

</div>
</section>



<?php get_footer(); ?>