<?php
/*
    Template Name: About
    MEU Theme | MEU Page Template
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
 */
?>

<?php get_header(); ?>

<main id="meu-main">

    <header class="section-header">
        <div class="container-fluid">
            <div class="header-container">

                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) : the_post();
                        ?>

                        <div id="about-hero-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/sponsors/BETA_SVK.png" class="img-responsive" alt="beta-slovakia-logo">
                        </div>

                        <div class="meu-section-paragraph">
                            <?php echo the_content() ?>

                        <?php $query = new WP_Query( "pagename=about-us-2" ); ?>
                        <?php if ( $query->have_posts() ) : $query->the_post(); ?>
                            <div id="meu-about-section-hidden">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                        <div id="meu-about-1" class="meu-link">
                            <span id="meu-about-1-text">READ MORE</span>
                        </div>

                    <?php endwhile; } ?>

            </div>
        </div>
    </header>

    <?php get_footer(); ?>
