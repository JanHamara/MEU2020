<?php
/*
    Template Name: Account
    MEU Theme | MEU Page Template
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

<?php get_header(); ?>

<!--  -----------------------------------------------------------------------------------------------------------------  -->

<main id="meu-main">

    <header class="section-header">
        <div class="container-fluid">
            <div class="header-container">

                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) : the_post();
                        ?>

                        <?php if (!$userInfo) { ?>

                        <h1 class="meu-section-heading" data-aos="fade-in" data-aos-delay="800"><span class="meu-yellow">MY ACCOUNT</span></h1>

                        <div class="meu-section-paragraph" data-aos="fade-in" data-aos-delay="1100">
                            <?php echo the_content() ?>
                        </div>

                        <a href="<?php echo site_url( '/login' ) ?>" class="meu-link">
                            <span>LOGIN</span>
                        </a>

                        <?php } else { ?>

                        <h1 class="meu-section-heading" data-aos="fade-in" data-aos-delay="800"><span class="meu-yellow">MY ACCOUNT</span></h1>

                        <div class="meu-section-paragraph" data-aos="fade-in" data-aos-delay="1100">

                            WELCOME TO YOUR PERSONAL DASHBOARD!<br/><br/>
                            
                            <br/>

                            HERE YOU WILL BE ABLE TO FILL OUT YOUR <span class="meu-yellow">CONFERENCE APPLICATION</span><br/><br/>

                            THE APPLICATION FORM WILL BE MADE AVAILABLE ON <span class="meu-yellow">01 JULY 2020</span><br/><br/>

                            <br/><br/>

                            <a href="<?php echo site_url( '/logout' ) ?>" class="meu-link">
                                <span>LOGOUT</span>
                            </a>
                        </div>

                        <?php } ?>

                    <?php endwhile; } ?>

            </div>
        </div>
    </header>

    <?php get_footer(); ?>
