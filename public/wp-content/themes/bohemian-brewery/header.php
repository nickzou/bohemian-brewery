<!DOCTYPE html>
<html lang="en">
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <body <?php body_class(); ?>>
        <header role="navigation" aria-label="Site Header" class="container-fluid site-header-container">
            <div class="row site-header-row">
                <div class="container">
                    <div class="row position-relative" style="overflow-x: hidden">
                        <div class="col col-12 d-flex justify-content-center align-items-center logo-col">
                            <a href="<?php echo get_home_url(); ?>" class="site-logo">
                                <?php echo open_svg('/assets/logos/logo.svg'); ?>
                            </a>
                        </div>
                        <button id="hamburger-button" class="hamburger hamburger--spring" type="button" aria-label="Menu" aria-controls="navigation">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                        <div id="menu" class="col col-12 menu-col">
                            <?php
                                $args = [
                                    'menu' => 'header',
                                    'container' => 'nav'
                                ];

                                wp_nav_menu($args);
                            ?>
                            <?php echo open_svg('/assets/logos/logo.svg'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>