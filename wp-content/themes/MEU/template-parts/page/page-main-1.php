<?php
/*
    Content Template | page-main-1
	Copyright: 2017, Seculin, www.seculin.com
*/
?>

<div class="container-fluid">
    <div class="header-container lp-header-container">

        <?php $query = new WP_Query( "pagename=what-is-meu" ); ?>
        <?php if ( $query->have_posts() ) : $query->the_post(); ?>
        <h1 class="meu-section-heading meu-link meu-m2-heading">
            <span><?php the_title(); ?></span>
        </h1>

        <div class="meu-section-paragraph">
            <div class="meu-section-meu">
                <?php the_content(); ?>
            </div>

            <img id="what-is-meu-image" src="<?php echo get_template_directory_uri(); ?>/images/MEU_branding/logo_main_white_nopadding.png" class="img-responsive" alt="meu-logo">
        </div>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>