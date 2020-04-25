<?php wp_footer();?>
<footer  role="contentinfo" class="footer_navbar">
    <div class="footer_container">
        <?php  wp_nav_menu (
            array(
                'theme_location' => 'footer_menu',
                'menu_class' => 'footer_navbar'
            )
        ); ?>
    <div class="footer_navbar_card"></div>
    <div class="footer_navbar_info"></div>
    <div class="footer_navbar_link"></div>
    </div>
</footer>
</body>
</html>
