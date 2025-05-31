<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="cslpr-slider-wrapper">
    <div class="cslpr-slider">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="cslpr-slide">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="cslpr-slide-image">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>
                <h3 class="cslpr-slide-title"><?php the_title(); ?></h3>
            </div>
        <?php endwhile; ?>
    </div>
</div>
