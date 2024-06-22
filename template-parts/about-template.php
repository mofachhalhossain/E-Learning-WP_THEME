<?php

$args = array(
    'post_type' => 'about',
    'posts_per_page' => 1
);
$about_query = new WP_Query( $args );

if ( $about_query->have_posts() ) :
    while ( $about_query->have_posts() ) : $about_query->the_post();
        $about_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        $about_title = get_the_title();
        $about_description = get_the_content();
        $about_list = get_post_meta( get_the_ID(), '_elearning_about_list', true );
        $about_button_text = get_post_meta( get_the_ID(), '_elearning_about_button_text', true );
        $about_button_url = get_post_meta( get_the_ID(), '_elearning_about_button_url', true );
?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <?php if ( $about_image ) : ?>
                    <div class="about-img">
                        <img src="<?php the_post_thumbnail(); ?>
                    </div>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() . '/img/about.jpg'; ?>" alt="Default About Image" class="img-fluid">
                <?php endif; ?>
            </div>
            <div class="col-lg-6 about-right">
                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h1 class="mb-4"><?php echo esc_html( $about_title ); ?></h2>
                <p class="mb-4"><?php echo wp_kses_post( $about_description ); ?></p>
                <?php if ( $about_list ) : ?>
                    <div class="about-list">
                        <ul>
                            <?php 
                            $list_items = explode( ',', $about_list );
                            foreach ( $list_items as $item ) : 
                            ?>
                            <li><i class="fa fa-arrow-right text-primary me-2"></i> <?php echo esc_html( trim( $item ) ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if ( $about_button_text && $about_button_url ) : ?>
                    <a href="<?php echo esc_url( $about_button_url ); ?>" class="btn btn-primary py-3 px-5 mt-2"><?php echo esc_html( $about_button_text ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
    endwhile;
    wp_reset_postdata();
else :
?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri() . '/img/about.jpg'; ?>" alt="Default About Image" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h2>Welcome to eLEARNING</h2>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet.</p>
                <ul>
                    <li><i class="fa fa-arrow-right"></i> Default list item 1</li>
                    <li><i class="fa fa-arrow-right"></i> Default list item 2</li>
                    <li><i class="fa fa-arrow-right"></i> Default list item 3</li>
                </ul>
                <a href="#" class="btn btn-primary">Default Button</a>
            </div>
        </div>
    </div>
</div>

<?php
endif;
?>
