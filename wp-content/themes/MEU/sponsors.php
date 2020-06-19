<?php
/*
    Template Name: Sponsors
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

                        <h1 class="meu-section-heading">WE ARE ACTIVELY LOOKING FOR MORE <span class="meu-yellow">SPONSORS</span></h1>

                        <div class="meu-section-paragraph">
                            <?php echo the_content() ?>
                        </div>
                    <?php endwhile; } ?>

                        <a href="<?php echo site_url( '/contact' ) ?>" id="meu-sponsor" class="meu-link">
                            <span><?php echo get_post_meta($post->ID, 'Button1', true); ?></span>
                        </a>

                        <ul id="meu-sponsors" class="list-unstyled list-inline">
                            <li class="meu-sponsors-item">
                                <a href="https://www.visegradfund.org/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/sponsors/V4.png" class="img-responsive" alt="v4-logo">
                                </a>
                            </li>
                            <li class="meu-sponsors-item">
                                <a href="#" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/sponsors/BETA_EU.png" class="img-responsive" alt="beta-europe-logo">
                                </a>
                            </li>
                            <li class="meu-sponsors-item">
                                <a href="https://zvolsi.info/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/sponsors/ZvolSi.png" class="img-responsive" alt="zvolsi-logo">
                                </a>
                            </li>
                            <li class="meu-sponsors-item">
                                <a href="https://www.opensocietyfoundations.org/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/sponsors/OpenSociety.png" class="img-responsive" alt="open-society-logo">
                                </a>
                            </li>
                            <li class="meu-sponsors-item">
                                <a href="https://www.leaf.sk/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/sponsors/LEAF.png" class="img-responsive" alt="leaf-logo">
                                </a>
                            </li>
                            <li class="meu-sponsors-item">
                                <a href="https://www.edu.unideb.hu/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/sponsors/UoD.png" class="img-responsive" alt="debrecen-university-logo">
                                </a>
                            </li>
                            <li class="meu-sponsors-item">
                                <a href="https://uniba.sk/en/migracia/comenius-university-in-bratislava/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/sponsors/Comenius_v2.png" class="img-responsive" alt="comenius-university-logo">
                                </a>
                            </li>
                            <li class="meu-sponsors-item">
                                <a href="http://www.meu-warsaw.pl/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/sponsors/BETA_PL.png" class="img-responsive" alt="beta-polska-logo">
                                </a>
                            </li>
                            <li class="meu-sponsors-item">
                                <a href="#" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/sponsors/BETA_CZK.png" class="img-responsive" alt="beta-czk-logo">
                                </a>
                            </li>
                        </ul>
            </div>
        </div>
    </header>

    <?php get_footer(); ?>
