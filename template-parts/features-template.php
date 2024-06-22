<?php

$features = new WP_Query(array(
    'post_type' => 'feature',
    'posts_per_page' => -1
));

if ($features->have_posts()) : ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <?php
                $delay = 0.1;
                while ($features->have_posts()) : $features->the_post();
                    $icon = get_post_meta(get_the_ID(), '_elearning_feature_icon', true); ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <?php if ($icon) : ?>
                                    <i class="fa fa-3x <?php echo esc_attr($icon); ?> text-primary mb-4"></i>
                                <?php endif; ?>
                                <h5 class="mb-3"><?php the_title(); ?></h5>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $delay += 0.2; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Book Library</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
