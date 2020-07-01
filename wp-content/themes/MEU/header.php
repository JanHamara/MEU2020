<?php
/*
    MEU Theme | Header
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
*/

require 'vendor/autoload.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'meu-dev.eu.auth0.com',
  'client_id' => 'F7SVHAQH1LDYVJKOq6OR95UpdaE4dN7e',
  'client_secret' => 'H66C9oiuJdLv3-jhhDacXRfPqYdjGfDktAZ-6CjJmqqgkoqGG3Q8CX3I1zyKEgX9',
  'redirect_uri' => 'https://www.meubratislava.eu',
  'scope' => 'openid profile email',
]);

$userInfo = $auth0->getUser();
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