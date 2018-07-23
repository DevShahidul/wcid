<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="main-wrap">
            <!-- Begin header area 
            ==================-->
            <header class="header-area">
                <div class="logo-wrap">
                    <div class="common-wrap clear">
                        <div class="main-logo">
                            <a href="<?php bloginfo('url'); ?>">
                                <img src="<?php the_field('logo','options'); ?>" alt="#">
                            </a>
                        </div>
                        <div class="phone-nav">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>

                <nav class="main-nav">
                    <?php $defaults = array(
                        'theme_location'  => '',
                        'menu'            => 'Top Menu',
                        'container'       => 'div',
                        'container_class' => 'common-wrap clear',
                        'container_id'    => 'top-main-nav',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => ''
                    );
                    ?>
                    <?php wp_nav_menu( $defaults ); ?>
                </nav>
            </header>
            <!-- End header area -->