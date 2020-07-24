<?php

    function theme_setup() {
        register_nav_menus(
            [
                'header' => __('Header')
            ]
        );

        add_theme_support('post-thumbnails');

        add_image_size('mobile-9_x_16', 450, 800, true);
        add_image_size('mobile-16_x_9', 800, 450, true);
        add_image_size('tablet-3_x_4', 800, 1067, true);
        add_image_size('tablet-4_x_3', 1067, 800, true);
        add_image_size('laptop-16_x_10', 1350, 844, true);
        add_image_size('desktop-16_x_9', 1920, 1080, true);
    }

    add_action('after_setup_theme', 'theme_setup');