<?php

$terms = get_terms(array(
    'taxonomy' => 'course_category',
    'hide_empty' => false,
));

if (!empty($terms)) :
?>

<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
            <h1 class="mb-5">Courses Categories</h1>
        </div>
        <div class="row g-3">
            <?php foreach ($terms as $index => $term) :
                // Get the first post in this category
                $posts_in_term = get_posts(array(
                    'post_type' => 'course',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'course_category',
                            'field' => 'term_id',
                            'terms' => $term->term_id,
                        ),
                    ),
                    'posts_per_page' => 1,
                ));

                // Get the post thumbnail URL if there's a post
                $term_image_url = '';
                if (!empty($posts_in_term)) {
                    $post_thumbnail_id = get_post_thumbnail_id($posts_in_term[0]->ID);
                    if ($post_thumbnail_id) {
                        $term_image_url = wp_get_attachment_url($post_thumbnail_id);
                    }
                }
                
                // Fallback image if no post or no thumbnail
                if (!$term_image_url) {
                    $term_image_url = 'path/to/default/image.jpg'; // Replace with the actual default image path
                }

                $course_count = $term->count;

                // Determine delay for animation
                $delay = ($index + 1) * 0.2;
            ?>
                <?php if ($index == 0) : // Special layout for the first term ?>
                <div class="col-lg-7 col-md-6">
                    <div class="course-categories row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="<?php echo get_term_link($term); ?>">
                                <img class="img-fluid" src="<?php echo esc_url($term_image_url); ?>" alt="<?php echo esc_attr($term->name); ?>">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0"><?php echo esc_html($term->name); ?></h5>
                                    <small class="text-primary"><?php echo esc_html($course_count . ' Courses'); ?></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php elseif ($index == 1 || $index == 2) : // Layout for the second and third terms ?>
                <div class="course-categories col-lg-6 col-md-12 wow zoomIn" data-wow-delay="<?php echo esc_attr($delay . 's'); ?>">
                    <a class="position-relative d-block overflow-hidden" href="<?php echo get_term_link($term); ?>">
                        <img class="img-fluid" src="<?php echo esc_url($term_image_url); ?>" alt="<?php echo esc_attr($term->name); ?>">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                            <h5 class="m-0"><?php echo esc_html($term->name); ?></h5>
                            <small class="text-primary"><?php echo esc_html($course_count . ' Courses'); ?></small>
                        </div>
                    </a>
                </div>
                <?php elseif ($index == 3) : // Layout for the fourth term ?>
                <div class="course-categories col-lg-5 col-md-6 wow zoomIn" data-wow-delay="<?php echo esc_attr($delay . 's'); ?>" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="<?php echo get_term_link($term); ?>">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?php echo esc_url($term_image_url); ?>" alt="<?php echo esc_attr($term->name); ?>" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                            <h5 class="m-0"><?php echo esc_html($term->name); ?></h5>
                            <small class="text-primary"><?php echo esc_html($course_count . ' Courses'); ?></small>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php endif; ?>
