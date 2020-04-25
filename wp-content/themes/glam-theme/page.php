<?php get_header(); ?>
<section class="page-wrap">
    <div class="container pt-5 pb-5">
        <section class="row">
            <div class="col-lg-3">
                <!-- Call Sidebars -->
                <?php if( is_active_sidebar('page_sidebar'));?>
                    <?php dynamic_sidebar('page-sidebar');?>
            </div>
            <div class="col-lg-9">

            </div>
        </section>

        <!-- Afficher titre homePage -->
        <h1><?php the_title() ?></h1>
        <!-- Afficher les posts -->
        <?php get_template_part('include/section','content'); ?>

    I WRITE THINGS HERE

    </div>
</section>



<?php get_footer(); ?>