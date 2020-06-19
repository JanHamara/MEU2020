<?php
/*
    Template Name: Programme
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

                        <h1 class="meu-section-heading"><span class="meu-yellow">MEU 2020</span> PROGRAMME</h1>

                        <div class="meu-section-paragraph">
                            <?php echo the_content() ?>
                        </div>

                        <a href="<?php echo site_url( '/about-us' ) ?>" id="meu-programme-1" class="meu-link">
                            <span><?php echo get_post_meta($post->ID, 'Button1', true); ?></span>
                        </a>

                        <a href="<?php echo site_url( '/contact' ) ?>" id="meu-programme-2" class="meu-link">
                            <span><?php echo get_post_meta($post->ID, 'Button2', true); ?></span>
                        </a>
                    <?php endwhile; } ?>

            </div>
        </div>
    </header>

    <?php get_footer(); ?>
