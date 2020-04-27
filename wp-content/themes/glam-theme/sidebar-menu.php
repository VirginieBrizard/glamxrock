<?php
if ( ! is_active_sidebar( 'footer-menu' ) ) {
    return;
}
?>

<aside id="menu-widget-area" class="menu-widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Menu widget area', 'carbon-lite' ); ?>">
    <?php dynamic_sidebar( 'footer-menu' ); ?>
</aside>
