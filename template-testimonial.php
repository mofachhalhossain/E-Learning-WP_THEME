<?php get_header(); 
/* Template Name: Testimonial Template */
?>

<body>

    <!-- Navbar Start -->
    <?php echo get_template_part( 'template-parts/navbar', '' ) ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <?php echo get_template_part( 'template-parts/page', 'heading' ) ?>
    <!-- Header End -->


    <!-- Testimonial Start -->
    <?php echo get_template_part( 'template-parts/testimonial', 'template' ) ?>
    <!-- Testimonial End -->
        
<?php echo get_template_part( 'template-parts/footer', '' ) ?>