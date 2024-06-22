<div class="container-fluid bg-primary py-5 mb-5 page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/carousel-1.jpg)">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <?php if( get_post_type() === 'page' ): ?>
                        <h4><?php single_post_title(); ?></h4>
                    <?php else: ?>
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>