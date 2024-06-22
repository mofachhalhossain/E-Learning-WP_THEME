<?php get_header(); 
/* Template Name: About Template */
?>

<body>

    <!-- Navbar Start -->
    <?php echo get_template_part( 'template-parts/navbar', '' ) ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <?php echo get_template_part( 'template-parts/page', 'heading' ) ?>
    <!-- Header End -->


    <!-- Feature Start -->
         <?php echo get_template_part( 'template-parts/features', 'template' ) ?>
    <!-- Feature End -->


    <!-- About Start -->
     <?php echo get_template_part( 'template-parts/about', 'template' ) ?>
    <!-- About End -->


    <!-- Team Start -->
    <?php echo get_template_part( 'template-parts/instructors', 'template' ) ?>
    <!-- Team End -->
        
<?php echo get_template_part( 'template-parts/footer', '' ) ?>