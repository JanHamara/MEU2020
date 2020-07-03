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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/1.jpg" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">LUCIA KRAJČOVIČOVÁ</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">GENERAL DIRECTOR</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">l.krajcovicova@beta-europe.org</div>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/2.jpg" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">EMA GRAJCAROVÁ</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">DEPUTY DIRECTOR</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">e.grajcarova@beta-europe.org</div>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/3.jpg" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">ANDREA KOMOVÁ</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">HEAD OF TECHNOLOGY <br/>AND INNOVATION</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">a.komova@beta-europe.org</div>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/4.jpg" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">MILANA IDRISOVÁ</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">HEAD OF WORKSHOPS <br/>AND PROTOCOL</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">m.idrisova@beta-europe.org</div>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/6.jpg" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">JAKUB BARSZCZ</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">HEAD OF PARTNERSHIPS</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">j.barszcz@beta-europe.org</div>
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

                    <div class="meu-tg-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_components/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
                        <!--        Profile Photo        -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/placeholder.jpg" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">NICK D. MADŽAROV</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">HEAD OF CONTENT</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">n.madzarov@beta-europe.org</div>
                        <!--        Social Media        -->
                        <ul class="meu-tg-media list-unstyled list-inline">
                            <li>
                                <a href="https://www.facebook.com/nmadzarov" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook_icon.png" class="img-responsive" alt="facebook-logo">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/ndmadzarov/" target="_blank">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/placeholder.jpg" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">DOMINIK BUJŇÁK</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">PARTICIPANTS COORDINATOR</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">d.bujnak@beta-europe.org</div>
                        <!--        Social Media        -->
                        <ul class="meu-tg-media list-unstyled list-inline">
                            <li>
                                <a href="https://www.facebook.com/panda.dominik" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook_icon.png" class="img-responsive" alt="facebook-logo">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/dominik-bujňák-7161a5163/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin_icon.png" class="img-responsive" alt="linkedin-logo">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="meu-tg-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_components/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
                        <!--        Profile Photo        -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile_photos/placeholder.jpg" class="img-responsive img-circle team-profile-photo" alt="team-item-photo">
                        <!--        Name        -->
                        <div class="meu-tg-name">LENKA MARČANOVÁ</div>
                        <!--        Position        -->
                        <div class="meu-tg-position">HEAD OF MARKETING</div>
                        <!--        Email        -->
                        <div class="meu-tg-email">l.marcanova@beta-europe.org</div>
                        <!--        Social Media        -->
                        <ul class="meu-tg-media list-unstyled list-inline">
                            <li>
                                <a href="https://www.facebook.com/lenka.marcanova" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook_icon.png" class="img-responsive" alt="facebook-logo">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/lenka-marcanova-80bb84136/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin_icon.png" class="img-responsive" alt="linkedin-logo">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="meu-tg-item">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
