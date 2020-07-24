<?php

/*
    Template Name: Home Page
    Post Type: page
*/
    get_header();
?>
    <main class="container-fluid main-container template-home-page-container">
        <?php get_template_part('template-parts/templates/home-page/carousel'); ?>
    </main>
<?php
    get_footer();
?>