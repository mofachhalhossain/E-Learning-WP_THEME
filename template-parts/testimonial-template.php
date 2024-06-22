<?php

$args = array(
    'post_type' => 'testimonial',
    'posts_per_page' => -1, 
    'order' => 'ASC',       
);

$testimonials = new WP_Query( $args );
?>

<div class="testimonial-section container-xxl py-5 col-md-6 col-lg-3 mb-4">
<div class="text-center">
    <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
    <h1 class="mb-5">Our Students Say!</h1>
</div>
<?php
    if ( $testimonials->have_posts() ) :
    while ( $testimonials->have_posts() ) : $testimonials->the_post();
        ?>
            <div class="testimonial-item text-center">
                <?php
                if ( has_post_thumbnail() ) {
                    echo '<img class="border rounded-circle p-2 mx-auto mb-3" src="' . esc_url( get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ) ) . '" style="width: 80px; height: 80px;">';
                } else {
                    echo '<img class="border rounded-circle p-2 mx-auto mb-3" src="' . esc_url( get_template_directory_uri() . '/img/default-testimonial.jpg' ) . '" style="width: 80px; height: 80px;">';
                }
                ?>
                <h5 class="mb-0"><?php the_title(); ?></h5>
                <p><?php echo esc_html( get_the_content() ); ?></p>
                <?php

                $quote = get_post_meta( get_the_ID(), 'quote', true );
                if ( $quote ) {
                    echo '<div class="testimonial-text bg-light text-center p-4">';
                    echo '<p class="mb-0">' . esc_html( $quote ) . '</p>';
                    echo '</div>';
                }
                ?>
            </div>
        <?php
    endwhile;
    wp_reset_postdata(); ?>
    </div>
<?php 
else :
    echo '<p>No testimonials found.</p>';
endif;

?>
