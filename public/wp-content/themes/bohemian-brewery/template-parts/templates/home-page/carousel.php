
<?php
    $slides = get_field('carousel');
?>
<div class="row">
    <div class="col col-12 p-0">
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php
                    foreach($slides as $slide):
                        $args = [
                            'buttons' => [$slide['button']],
                            'background_image' => [
                                'mobile' => $slide['image']['sizes']['mobile-9_x_16'],
                                'tablet_portrait' => $slide['image']['sizes']['tablet-3_x_4'],
                                'tablet_landscape' => $slide['image']['sizes']['tablet-4_x_3'],
                                'laptop' => $slide['image']['sizes']['laptop-16_x_10'],
                                'desktop' => $slide['image']['sizes']['desktop-16_x_9']
                            ]
                        ];
                        echo get_component('components/carousel-slide', $args);
                    endforeach;
                ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>