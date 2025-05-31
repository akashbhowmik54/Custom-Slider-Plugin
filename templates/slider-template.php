<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="cslpr__slider-wrapper">
    <div class="cslpr__slider">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="cslpr__slide">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="cslpr__slide-image">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>
                <h3 class="cslpr__slide-title"><?php the_title(); ?></h3>
            </div>
        <?php endwhile; ?>
    </div>
</div>
