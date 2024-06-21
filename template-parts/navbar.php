<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="<?php esc_url( home_url() ); ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
              echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            } else {
              echo '<h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>';
            }
        ?>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <?php 
        if ( has_nav_menu( 'main_menu' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'main_menu',
                'menu_class'     => 'navbar-nav ms-auto p-4 p-lg-0',
                'container'      => false,
            ));
        } else {
            ?>
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo home_url(); ?>" class="nav-item nav-link active">Home</a>
                <a href="<?php echo home_url( '/about' ); ?>" class="nav-item nav-link">About</a>
                <a href="<?php echo home_url( '/courses' ); ?>" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="<?php echo home_url( '/team' ); ?>" class="dropdown-item">Our Team</a>
                        <a href="<?php echo home_url( '/testimonial' ); ?>" class="dropdown-item">Testimonial</a>
                        <a href="<?php echo home_url( '/404' ); ?>" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="<?php echo home_url( '/contact' ); ?>" class="nav-item nav-link">Contact</a>
            </div>
            <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
            <?php
        }
        ?>
    </div>
</nav>
