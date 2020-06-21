<?php
/*
    Template Name: About
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

                        <div id="about-hero-image" data-aos="zoom-in" data-aos-delay="800">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/sponsors/BETA_SVK.png" class="img-responsive" alt="beta-slovakia-logo">
                        </div>

                        <div class="meu-section-paragraph" data-aos="fade-in" data-aos-delay="1100" data-aos-offset="-1000">
                            <?php echo the_content() ?>

                        <?php $query = new WP_Query( "pagename=about-us-2" ); ?>
                        <?php if ( $query->have_posts() ) : $query->the_post(); ?>
                            <div id="meu-about-section-hidden">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                        <div id="meu-about-1" class="meu-link" data-aos="fade-in" data-aos-delay="1500" data-aos-offset="-1000">
                            <span id="meu-about-1-text">READ MORE</span>
                        </div>

                    <?php endwhile; } ?>

            </div>
        </div>
    </header>

    <?php get_footer(); ?>
