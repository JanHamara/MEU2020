<?php
/*
    MEU Theme | Front Page
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
*/
?>

<?php get_header(); ?>

    <div id="covid-alert">
        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
        <span class="covid-alert-span">ATTENTION</span>
        <span class="covid-alert-span">|</span>
        DUE TO COMPLICATIONS CAUSED BY THE COVID-19 PANDEMIC, THE CONFERENCE WILL TAKE PLACE <span class="covid-alert-span">ONLINE</span>
        <div id="close-covid-alert">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
    </div>

<main>

    <header id="meu-header">
        <?php get_template_part( 'template-parts/header/page', 'header' ); ?>
    </header>

    <section id="meu-main-1" class="section-header">
        <?php get_template_part( 'template-parts/page/page', 'main-1' ); ?>
    </section>

    <section id="meu-main-2" class="section-header">
        <?php get_template_part( 'template-parts/page/page', 'main-2' ); ?>
    </section>

<?php get_footer(); ?>