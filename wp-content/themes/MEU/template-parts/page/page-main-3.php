<?php
/*
    Content Template | page-main-3
	Copyright: 2017, Seculin, www.seculin.com
*/
?>

<div class="container-fluid">
    <div class="header-container">

        <?php $query = new WP_Query( "pagename=what-do-we-offer" ); ?>
        <?php if ( $query->have_posts() ) : $query->the_post(); ?>
        <h1 class="meu-section-heading meu-link meu-m2-heading">
            <span><?php the_title(); ?></span>
        </h1>

        <div class="meu-section-paragraph">
            <?php the_content(); ?>
        </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <div id="meu-m3-roles">
            <div class="meu-m3-role">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/offer/01.png" class="img-responsive img-resize" alt="offer-icon">
                <div class="meu-m3-rolename">WEBINARS</div>
                <div class="meu-m3-roledesc">3x Preparatory webinars held with world-class experts to ensure a high-quality debate throughout the programme</div>
            </div>
            <div class="meu-m3-role">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/offer/02.png" class="img-responsive" alt="offer-icon">
                <div class="meu-m3-rolename">WORKSHOPS & DISCUSSIONS</div>
                <div class="meu-m3-roledesc">Providing participants with the opportunity <br/>to exchange ideas with leading politicians, policymakers and high-profile experts</div>
            </div>
            <div class="meu-m3-role">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/offer/03.png" class="img-responsive" alt="offer-icon">
                <div class="meu-m3-rolename">SOCIAL NETWORKING</div>
                <div class="meu-m3-roledesc">Networking opportunities for our participants, facilitating their professional and intellectual development in the field</div>
            </div>
        </div>

    </div>
</div>