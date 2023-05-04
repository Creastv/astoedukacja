<?php
$carousel = get_field( 'karuzela' );
?>
<section class="carousel">
    <?php if($carousel) : ?>
    <div class="swiper s-carousel">
        <div class="swiper-wrapper">
            <?php foreach($carousel as $item) : ?>
            <div class="swiper-slide">
                <div class="carousel__item">
                    <div class="item__img">
                        <?php 
                    if( $item['zdjecie'] ) {
                        echo wp_get_attachment_image( $item['zdjecie'], 'slider' );
                    }
                ?>
                    </div>
                    <div class="item__content">
                        <div class="left">
                            <p><?php echo $item['tytul']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="arrows">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <?php endif; ?>
</section>
