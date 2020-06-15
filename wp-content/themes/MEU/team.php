<?php
/*
    Template Name: Team
    MEU Theme | MEU Page Template
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
 */
?>

<?php get_header(); ?>

<main>

    <header class="section-header">
        <div class="container-fluid">
            <div class="header-container">

                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) : the_post();
                        ?>

                        <h1 class="meu-section-heading">GET TO KNOW <span class="meu-yellow">OUR TEAM</span></h1>

                        <div class="meu-section-paragraph">
                            <?php echo the_content() ?>
                        </div>

                        <a href="#meu-team" id="meu-team-1" class="meu-link">
                            <span>MEET THE TEAM</span>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_compontents/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_compontents/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_compontents/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_compontents/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_compontents/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_compontents/team_container.png" class="meu-tg-bg img-responsive" alt="team-item-bg">
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
