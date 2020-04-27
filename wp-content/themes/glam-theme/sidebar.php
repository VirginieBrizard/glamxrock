<?php if ( is_active_sidebar( 'page-sidebar' ) ) : ?>
  <aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
    <?php dynamic_sidebar( 'page-sidebar'); ?>
  </aside>
<?php endif; ?>