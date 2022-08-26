<?php
function annamayya_univ_files()
{
    /* wp_enqueue_style('aits_main_style',get_stylesheet_uri()); */
    wp_enqueue_script('aits_js',get_theme_file_uri('/assets/js/vendor/modernizr-2.8.3.min.js'));
    wp_enqueue_script('aits_js1',get_theme_file_uri('/assets/js/scripts.js'));
    wp_enqueue_script('aits_js2',get_theme_file_uri('/assets/owl.carousel.min.js'));
    wp_enqueue_script('aits_js3',get_theme_file_uri('/assets/js/vendor/jquery-2.2.4.min.js'));
    wp_enqueue_script('aits_js4',get_theme_file_uri('/assets/js/jquery.magnific-popup.min.js'));
    wp_enqueue_script('aits_js3',get_theme_file_uri('/assets/js/plugins.js'),NULL);
    wp_enqueue_style('aits_font_awesome',get_theme_file_uri('/assets/css/font-awesome.min.css'));
    wp_enqueue_style('aits_bootstrap',get_theme_file_uri('/assets/css/bootstrap.min.css'));
    wp_enqueue_style('aits_default',get_theme_file_uri('/assets/css/default-css.css'));
    wp_enqueue_style('aits_magnificpopup',get_theme_file_uri('/assets/css/magnific-popup.css'));
    wp_enqueue_style('aits_owl',get_theme_file_uri('/assets/css/owl.carousel.min.css'));
    wp_enqueue_style('aits_responsive',get_theme_file_uri('/assets/css/responsive.css'));
    wp_enqueue_style('aits_slicknav',get_theme_file_uri('/assets/css/slicknav.min.css'));
    wp_enqueue_style('aits_bootstrap',get_theme_file_uri('/assets/css/typography.css'));
    wp_enqueue_style('aits_main_style',get_theme_file_uri('/assets/css/styles.css'));

}
add_action('wp_enqueue_scripts', 'annamayya_univ_files');
