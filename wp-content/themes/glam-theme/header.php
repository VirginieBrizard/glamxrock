<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap');
        </style>
    </head>
    <body <?php body_class();?>>
    <header class="sticky-top navbar">
            <div class="navbar--logo">
                <a href="http://glamxrock/"><img class="navbar_container--logo" src="http://glamxrock/wp-content/uploads/2020/04/skull-rose-cover.png"></a>
            </div>
            <div class="navbar--links">
                <?php  wp_nav_menu (
                    array(
                        'theme_location' => 'primary_menu',
                        'menu_class' => 'navbar'
                    )
                ); ?>
            </div>

    </header>