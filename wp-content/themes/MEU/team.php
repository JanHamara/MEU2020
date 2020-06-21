<?php
/*
    Template Name: Team
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

                        <h1 class="meu-section-heading" data-aos="fade-in" data-aos-delay="800">GET TO KNOW <span class="meu-yellow">OUR TEAM</span></h1>

                        <div class="meu-section-paragraph" data-aos="fade-in" data-aos-delay="1100">
                            <?php echo the_content() ?>
                        </div>

                        <a href="#meu-team" id="meu-team-1" class="meu-link" data-aos="fade-in" data-aos-delay="1500" data-aos-offset="-1000">
                            <span><?php echo get_post_meta($post->ID, 'Button1', true); ?></span>
                        </a>
                    <?php endwhile; } ?>
            </div>
        </div>
    </header>

    <section id="meu-team">
        <div class="container-fluid">
            <div class="team-container">
                <!--        Heading        -->
                <div id="team-header" class="meu-link">
                    <span>MEET THE TEAM</span>
                </div>

                <!--        Team        -->
                <div class="meu-team-grid">
                    <div class="meu-tg-item">
                        <!--        Background        -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_components/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
                        <!--        Profile Photo        -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/1.png" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">LUCIA KRAJČOVIČOVÀ</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">PRESIDENT</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">president@meubratislava.eu</div>
                        <!--        Social Media        -->
                        <ul class="meu-tg-media list-unstyled list-inline">
                            <li>
                                <a href="https://www.facebook.com/lucia.krajcovicova.397" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook_icon.png" class="img-responsive" alt="facebook-logo">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/lucia-krajcovicova/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin_icon.png" class="img-responsive" alt="linkedin-logo">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="meu-tg-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_components/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
                        <!--        Profile Photo        -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/2.png" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">EMA GRAJCAROVÀ</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">VICE-PRESIDENT</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">vpresident@meubratislava.eu</div>
                        <!--        Social Media        -->
                        <ul class="meu-tg-media list-unstyled list-inline">
                            <li>
                                <a href="https://www.facebook.com/emma.grajcarova" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook_icon.png" class="img-responsive" alt="facebook-logo">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/ema-grajcarová-1306/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin_icon.png" class="img-responsive" alt="linkedin-logo">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="meu-tg-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_components/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
                        <!--        Profile Photo        -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/3.png" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">ANDREA KOMOVÁ</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">HEAD OF RECRUITMENT</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">hr@meubratislava.eu</div>
                        <!--        Social Media        -->
                        <ul class="meu-tg-media list-unstyled list-inline">
                            <li>
                                <a href="https://www.facebook.com/andrea.komova" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook_icon.png" class="img-responsive" alt="facebook-logo">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/andrea-koma/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin_icon.png" class="img-responsive" alt="linkedin-logo">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="meu-team-grid">
                    <div class="meu-tg-item">
                        <!--        Background        -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_components/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
                        <!--        Profile Photo        -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/4.png" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">MILANA IDRISOVÁ</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">HEAD OF CONTENT</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">content@meubratislava.eu</div>
                        <!--        Social Media        -->
                        <ul class="meu-tg-media list-unstyled list-inline">
                            <li>
                                <a href="https://www.facebook.com/milana.idrisova.37" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook_icon.png" class="img-responsive" alt="facebook-logo">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/milana-idrisova-983807178/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin_icon.png" class="img-responsive" alt="linkedin-logo">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="meu-tg-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_components/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
                        <!--        Profile Photo        -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/5.png" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">SAMUEL ŠVAJDA</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">HEAD OF MARKETING & PR</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">marketing@meubratislava.eu</div>
                        <!--        Social Media        -->
                        <ul class="meu-tg-media list-unstyled list-inline">
                            <li>
                                <a href="https://www.facebook.com/samuel.svajda" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook_icon.png" class="img-responsive" alt="facebook-logo">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/search/results/all/?keywords=SAMUEL%20ŠVAJDA&origin=GLOBAL_SEARCH_HEADER" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin_icon.png" class="img-responsive" alt="linkedin-logo">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="meu-tg-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_components/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
                        <!--        Profile Photo        -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/6.png" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">JAKUB BARSZCZ</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">HEAD OF FUNDRAISING</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">fundraising@meubratislava.eu</div>
                        <!--        Social Media        -->
                        <ul class="meu-tg-media list-unstyled list-inline">
                            <li>
                                <a href="https://www.facebook.com/kubo.barszcz" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook_icon.png" class="img-responsive" alt="facebook-logo">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/jakub-barszcz-758095179/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin_icon.png" class="img-responsive" alt="linkedin-logo">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
