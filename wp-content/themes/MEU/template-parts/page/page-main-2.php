<?php
/*
    Content Template | page-main-2
	Copyright: 2017, Seculin, www.seculin.com
*/
?>

    <div class="container-fluid">
        <div class="header-container">

            <?php $query = new WP_Query( "pagename=what-will-i-do" ); ?>
            <?php if ( $query->have_posts() ) : $query->the_post(); ?>
            <h1 class="meu-section-heading meu-link meu-m2-heading">
                <span><?php the_title(); ?></span>
            </h1>

            <div class="meu-section-paragraph">
                <?php the_content(); ?>
            </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <div id="meu-m2-roles">
                <div class="meu-m2-role">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/roles/01.png" class="img-responsive" alt="role-icon">
                    <div class="meu-m2-rolename">MEP</div>
                    <div class="meu-m2-roledesc">Member of the European Parliament</div>
                </div>
                <div class="meu-m2-role">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/roles/02.png" class="img-responsive" alt="role-icon">
                    <div class="meu-m2-rolename">COMMISIONER</div>
                    <div class="meu-m2-roledesc">Member of the European Commision</div>
                </div>
                <div class="meu-m2-role">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/roles/03.png" class="img-responsive" alt="role-icon">
                    <div class="meu-m2-rolename">MINISTER</div>
                    <div class="meu-m2-roledesc">Member of the Council of Ministers</div>
                </div>
                <div class="meu-m2-role">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/roles/04.png" class="img-responsive" alt="role-icon">
                    <div class="meu-m2-rolename">LOBBYIST</div>
                    <div class="meu-m2-roledesc">Accredited lobbyist of EU policies</div>
                </div>
                <div class="meu-m2-role">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/roles/05.png" class="img-responsive" alt="role-icon">
                    <div class="meu-m2-rolename">JOURNALIST</div>
                    <div class="meu-m2-roledesc">Member of the European Federation of Journalists</div>
                </div>
            </div>

        </div>
    </div>