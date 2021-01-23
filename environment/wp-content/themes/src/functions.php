<?php

    function yanthusiast_init_styles(){
        $version = wp_get_theme()->get('Version');

        wp_enqueue_style('bootstrap-style',
            "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css",
            array(), '4.6.0','all');

        wp_enqueue_style('yanthusiast-style',
            get_template_directory_uri() . "/style.css",
            array('bootstrap-style'), $version,'all');
    }

    function yanthusiast_init_scripts(){

    }

    add_action('wp_enqueue_scripts', 'yanthusiast_init_styles');
    add_action('wp_enqueue_scripts', 'yanthusiast_init_scripts');

?>