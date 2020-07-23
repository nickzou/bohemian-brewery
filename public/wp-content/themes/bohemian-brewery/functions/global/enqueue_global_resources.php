<?php

    function enqueue_global_resources() {
        wp_enqueue_style('styles');
        wp_enqueue_script('app');
        if(is_page_template('templates/template-home-page.php')) {
            wp_enqueue_style('template-home-page');
            wp_enqueue_script('template-home-page');
        }
    }

    add_action('wp_enqueue_scripts', 'enqueue_global_resources');