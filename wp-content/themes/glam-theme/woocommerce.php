<?php get_header(); ?>
<section class="page-wrap">
    <div class="container pt-5 pb-5">
        <section class="row">
        <div class="col-lg-3 filter-widget sticky-top">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-lg-9">
            <?php woocommerce_content();?>
        <div>
    </div>
</section>

<?php get_footer(); ?>
