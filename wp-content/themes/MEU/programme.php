<?php
/*
    Template Name: Programme
    MEU Theme | MEU Page Template
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
 */
?>

<?php get_header(); ?>

<!--  -----------------------------------------------------------------------------------------------------------------  -->

<main id="meu-main">

    <header class="section-header">
        <div class="container-fluid">
            <div class="header-container">

                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) : the_post();
                        ?>

                        <h1 class="meu-section-heading" data-aos="fade-in" data-aos-delay="800"><span class="meu-yellow">MEU 2020</span> PROGRAMME</h1>

                        <div class="meu-section-paragraph" data-aos="fade-in" data-aos-delay="1100">
                            <?php echo the_content() ?>
                        </div>

                        <a href="<?php echo site_url( '/about-us' ) ?>" id="meu-programme-1" class="meu-link" data-aos="fade-in" data-aos-delay="1500" data-aos-offset="-1000" data-aos="fade-in" data-aos-delay="1500" data-aos-offset="-1000">
                            <span><?php echo get_post_meta($post->ID, 'Button1', true); ?></span>
                        </a>

                        <a href="<?php echo site_url( '/contact' ) ?>" id="meu-programme-2" class="meu-link" data-aos="fade-in" data-aos-delay="1500" data-aos-offset="-1000">
                            <span><?php echo get_post_meta($post->ID, 'Button2', true); ?></span>
                        </a>
                    <?php endwhile; } ?>

            </div>
        </div>
    </header>

    <?php get_footer(); ?>
