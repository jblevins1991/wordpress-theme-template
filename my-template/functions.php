<?php
    if (!function_exists('my_theme_name_setup')) :
        function my_theme_name_setup() {
            // add theme support for rss feeds by default
            add_theme_support('automatic-feed-links');

            // register navigation menus
            register_nav_menus(array(
                'header'   => __( 'Header Navigation Menu', 'my_theme_name' ),
            ));

            // enables post thumbnails
            add_theme_support('post-thumbnails');

            // different formats for blog posts
            add_theme_support('post-formats',  array('aside', 'gallery', 'quote', 'image', 'video'));

            // load localizations
            // load_theme_textdomain('my_theme_name', get_template_directory() . '/languages');

            // block themes
            add_theme_support('post-thumbnails');
            add_theme_support('responsive-embeds');
            add_theme_support('editor-styles');
            add_theme_support('html5', array('style','script'));
            add_theme_support('automatic-feed-links');
        }
    endif;

    function initializeStyles() {
        wp_enqueue_style();
    }

    // register our function to run when the `after_setup_theme` hook is called
    add_action('after_setup_theme', 'my_theme_name_setup');

    
?>