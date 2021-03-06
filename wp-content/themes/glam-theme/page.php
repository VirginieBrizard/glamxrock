<?php get_header(); ?>
<section class="page-wrap">
    <div class="container pt-5 pb-5">
        <section class="row">
        <div class="col-lg-3 filter-widget sticky-top">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-lg-9">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
        </section>
    </div>
</section>

<?php get_footer(); ?>
