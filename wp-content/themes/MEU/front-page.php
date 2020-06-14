<?php
/*
    MEU Theme | Front Page
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
*/
?>

<?php get_header(); ?>

<main>

    <header id="meu-header">
        <?php get_template_part( 'template-parts/header/page', 'header' ); ?>
    </header>

    <section id="meu-main-2">
        <?php get_template_part( 'template-parts/page/page', 'main-2' ); ?>
    </section>

<?php get_footer(); ?>