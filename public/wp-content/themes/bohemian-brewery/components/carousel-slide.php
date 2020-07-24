<div class="swiper-slide">
    <div class="swiper-slide-content">
        <h2 class="slide-title">title goes here</h2>
        <div class="slide-text">
            text goes here
        </div>
        <?php
            $buttons = $c['buttons'];
            if(!!$buttons):
        ?>
        <div class="slide-buttons">
            <?php
                
                foreach($buttons as $button):
                    $args = [
                        'text' => $button['title'],
                        'classes' => 'large',
                        'url' => $button['url'],
                        'target' => $button['target']
                    ];

                    echo get_component('components/button', $args);
                endforeach;
            ?>
        </div>
        <?php
            endif;
        ?>
    </div>
    <div class="swiper-bg-image-wrapper">
        <picture>
            <source class="swiper-bg-image" srcset="<?php echo $c['background_image']['desktop']; ?>" media="(min-width: 1280px)">
            <source class="swiper-bg-image" srcset="<?php echo $c['background_image']['laptop']; ?>" media="(min-width: 992px)">
            <source class="swiper-bg-image" srcset="<?php echo $c['background_image']['tablet_landscape']; ?>" media="(orientation: landscape) and (min-width: 737px)">
            <source class="swiper-bg-image" srcset="<?php echo $c['background_image']['tablet_portrait']; ?>" media="(orientation: portrait) and (min-width: 415px)">
            <source class="swiper-bg-image" srcset="<?php echo $c['background_image']['mobile']; ?>">
            <img class="swiper-bg-image" src="<?php echo $c['background_image']['mobile']; ?>">
        </picture>
    </div>
</div>