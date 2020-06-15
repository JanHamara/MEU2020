<?php
/*
    Template Name: About
    MEU Theme | MEU Page Template
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
 */
?>

<?php get_header(); ?>

<main>

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

                            <div id="meu-about-section-hidden">
                                <br/>
                                BETA Europe has grown to encompass 16 branches, all of which organise MEU conferences across Europe
                                in close co-operation with the European Commission, European Parliament, National Parliaments, academia and local NGOs.
                                <br/><br/>
                                We strive to establish a strong tradition of organising sustainable, professional and educational events about EU politics
                                to achieve our goal.
                                <br/><br/>
                                <span class="meu-yellow">Model European Union Bratislava 2020</span> will kickstart this initiative.
                            </div>
                        </div>

                        <div id="meu-about-1" class="meu-link">
                            <span id="meu-about-1-text">READ MORE</span>
                        </div>

                    <?php endwhile; } ?>

            </div>
        </div>
    </header>

    <?php get_footer(); ?>
