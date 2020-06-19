<?php
/*
    MEU Theme | Header
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    Using YoastSEO to attach meta data    -->

    <!--    Use core WP function to insert favicon    -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--    Use core WP function to insert favicon    -->

    <!--     AOS Framework (Used for animating elements on page as they appear in viewport)    -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part( 'template-parts/header/page', 'navigation' ); ?>