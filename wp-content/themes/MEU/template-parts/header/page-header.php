<?php
/*
    MEU Theme | Page Header
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
*/
?>

    <div class="container-fluid">
        <div class="header-container">

            <h1 id="meu-main-heading"><?php bloginfo( 'name' ); ?></h1>

            <?php $query = new WP_Query( "pagename=page-subtitle" ); ?>
            <?php if ( $query->have_posts() ) : $query->the_post(); ?>
            <h3 id="meu-main-subheading"><?php the_content(); ?></h3>

            <h5 id="meu-main-date"><?php echo get_post_meta($post->ID, 'Date', true); ?></h5>

            <div id="meu-header-links">
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
