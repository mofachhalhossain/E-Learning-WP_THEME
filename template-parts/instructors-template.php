<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
            <h1 class="mb-5">Expert Instructors</h1>
        </div>
        <div class="row g-4">
            <?php
            $instructors_query = new WP_Query( array(
                'post_type' => 'instructor',
                'posts_per_page' => -1, // Retrieve all posts
            ) );

            if ( $instructors_query->have_posts() ) :
                while ( $instructors_query->have_posts() ) : $instructors_query->the_post();
                    // Retrieve instructor's social URLs
                    $facebook_url = get_post_meta( get_the_ID(), '_instructor_facebook_url', true );
                    $twitter_url = get_post_meta( get_the_ID(), '_instructor_twitter_url', true );
                    $instagram_url = get_post_meta( get_the_ID(), '_instructor_instagram_url', true );
            ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <img class="img-fluid" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <?php if ( $facebook_url ) : ?>
                                        <a class="btn btn-sm-square btn-primary mx-1" href="<?php echo esc_url( $facebook_url ); ?>"><i class="fab fa-facebook-f"></i></a>
                                    <?php endif; ?>
                                    <?php if ( $twitter_url ) : ?>
                                        <a class="btn btn-sm-square btn-primary mx-1" href="<?php echo esc_url( $twitter_url ); ?>"><i class="fab fa-twitter"></i></a>
                                    <?php endif; ?>
                                    <?php if ( $instagram_url ) : ?>
                                        <a class="btn btn-sm-square btn-primary mx-1" href="<?php echo esc_url( $instagram_url ); ?>"><i class="fab fa-instagram"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0"><?php the_title(); ?></h5>
                                <small><?php echo wpautop( get_the_content() ); ?></small>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <div class="col-12 text-center">
                    <p>No instructors found.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
