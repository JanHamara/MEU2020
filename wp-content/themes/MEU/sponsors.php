<?php
/*
    Template Name: Sponsors
    MEU Theme | MEU Page Template
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
 */
?>

<?php get_header(); ?>

<main>

    <header id="meu-header">
        <div class="container-fluid">
            <div class="header-container">

                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) : the_post();
                        ?>

                        <h1 class="meu-section-heading">WE ARE ACTIVELY LOOKING FOR MORE <span class="meu-yellow">SPONSORS</span></h1>

                    <?php endwhile; } ?>

            </div>
        </div>
    </header>

    <?php get_footer(); ?>
