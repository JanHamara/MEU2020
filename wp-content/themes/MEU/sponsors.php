<?php
/*
    Template Name: Sponsors
    MEU Theme | MEU Page Template
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
 */
?>

<?php get_header(); ?>

<!--  -----------------------------------------------------------------------------------------------------------------  -->

<!--  Login Pop-Up  -->

<aside id="meu-login">
    <!--        Background        -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/login_bg.jpg" class="meu-login-bg-2 img-responsive" alt="login-bg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/page_components/team_container.png" class="meu-login-bg img-responsive" alt="login-item-bg">

    <!--        MEU 2020 Logo        -->
    <img id="meu-login-logo" src="<?php echo get_template_directory_uri(); ?>/images/MEU_branding/logo_main_white_nopadding_nosubheading.png" class="img-responsive" alt="meu-logo">

    <!--        LOGIN | REGISTER        -->
    <div class="meu-login-header">
        <div class="meu-lh-item-login">LOGIN</div> | <div class="meu-lh-item-register">REGISTER</div>
    </div>
    <!--        Login Form        -->
    <div id="meu-login-f">
        <form id="meu-login-form" name="login-form" method="post" action="login.php">
            <div class="form-group">
                <input id="meu-login-usermail" class="form-control" type="text" name="usermail" placeholder="Email">
            </div>
            <div class="form-group">
                <input id="meu-login-password" class="form-control" type="password" name="userpass" placeholder="Password" autocomplete="new-password">
            </div>
        </form>
    </div>
    <!--        Login Confirm        -->
    <div id="meu-submit-login-form" class="meu-link">
        <span>CONFIRM</span>
    </div>
    <!--        Close Button        -->
    <div id="close-meu-login">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>

    <!--        OVERLAY        -->
    <div id="meu-login-overlay">
        <div class="cam-attention-2">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <span class="alert-span">ATTENTION</span>
        </div>
        <span>
                THE OFFICAL REGISTRATION PROCESS <br/>
                FOR THE <strong>MEU 2020</strong> CONFERENCE <br/>
                HAS NOT BEEN OPEN YET.
                <br/><br/>
                REGISTRATIONS WILL OFFICIALY OPEN <br/>ON <strong>01 JULY 2020</strong>
            </span>
    </div>
</aside>

<!--  -----------------------------------------------------------------------------------------------------------------  -->

<main id="meu-main">

    <header class="section-header">
        <div class="container-fluid">
            <div class="header-container">

                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) : the_post();
                        ?>

                        <h1 class="meu-section-heading" data-aos="fade-in" data-aos-delay="800">WE ARE ACTIVELY LOOKING FOR MORE <span class="meu-yellow">SPONSORS</span></h1>

                        <div class="meu-section-paragraph" data-aos="fade-in" data-aos-delay="1100">
                            <?php echo the_content() ?>
                        </div>
                    <?php endwhile; } ?>

                        <a href="<?php echo site_url( '/contact' ) ?>" id="meu-sponsor" class="meu-link" data-aos="fade-in" data-aos-delay="1500" data-aos-offset="-1000">
                            <span><?php echo get_post_meta($post->ID, 'Button1', true); ?></span>
                        </a>

                        <ul id="meu-sponsors" class="list-unstyled list-inline" data-aos="fade-in" data-aos-delay="1800" data-aos-offset="-1000">
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
