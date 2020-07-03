<?php
/*
    Content Template | page-main-4
	Copyright: 2017, Seculin, www.seculin.com
*/
?>

<div class="container-fluid">
    <div class="header-container">
        <?php $query = new WP_Query( "pagename=our-goals" ); ?>
        <?php if ( $query->have_posts() ) : $query->the_post(); ?>
        <h1 class="meu-section-heading meu-link meu-m2-heading">
            <span><?php the_title(); ?></span>
        </h1>

        <div class="meu-section-paragraph">
            <?php the_content(); ?>
        </div>

        <a href="<?php echo site_url( '/login' ) ?>" class="meu-link meu-link-block">
            <span><?php echo get_post_meta($post->ID, 'Button1', true); ?></span>
        </a>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>