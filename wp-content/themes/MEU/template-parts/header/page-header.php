<?php
/*
    MEU Theme | Page Header
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
*/
?>

    <div class="container-fluid">
        <div class="header-container">

            <!--      Main Logo [ Mobile Only ]      -->
            <img id="meu-header-logo" data-aos="fade-in" data-aos-delay="500" src="<?php echo get_template_directory_uri(); ?>/images/MEU_branding/logo_main_white_nopadding.png" class="img-responsive" alt="meu-logo">

            <h1 id="meu-main-heading" data-aos="fade-in" data-aos-delay="800" data-aos-offset="-1000"><?php bloginfo( 'name' ); ?></h1>

            <?php $query = new WP_Query( "pagename=page-subtitle" ); ?>
            <?php if ( $query->have_posts() ) : $query->the_post(); ?>
            <h3 id="meu-main-subheading" data-aos="fade-in" data-aos-delay="1100" data-aos-offset="-1000"><?php the_content(); ?></h3>

            <h5 id="meu-main-date" data-aos="fade-in" data-aos-delay="1500" data-aos-offset="-1000"><?php echo get_post_meta($post->ID, 'Date', true); ?></h5>

            <div id="meu-header-links" data-aos="fade-in" data-aos-delay="1700" data-aos-offset="-1000">
                <a href="#meu-main-1" id="meu-read-more" class="meu-link">
                    <span><?php echo get_post_meta($post->ID, 'Button1', true); ?></span>
                </a>
                <a href="#" id="meu-apply-now" class="meu-link">
                    <span><?php echo get_post_meta($post->ID, 'Button2', true); ?></span>
                </a>
            </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
