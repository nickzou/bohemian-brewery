<?php

    get_header();
?>
    <main class="container-fluid main-container index-container">
        <?php
            if(have_posts()):

                while(have_posts()):

                    the_post();

                endwhile;

            endif;
        ?>
    </main>
<?php
    get_footer();

?>