<?php
/*
    MEU Theme | Page Navigation
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
*/


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

    <div id="nav-top-bar" data-aos="fade-down"></div>

    <nav id="meu-navigation" data-aos="fade-down">
        <div class="container-fluid">
            <!--     Navigation Background       -->
            <img id="meu-nav-bg" src="<?php echo get_template_directory_uri(); ?>/images/page_components/navigation_bar.png" class="img-responsive" alt="nav-bg">

            <!--     Navigation Logo       -->
            <a id="meu-nav-home" href="<?php echo home_url() ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/navigation_logo_text.png" class="img-responsive" alt="beta-logo">
            </a>

            <!--     Navigation List       -->
            <ul id="meu-nav-list" class="list-unstyled list-inline">
                <li class="meu-nav-list-item">
                    <a href="<?php echo site_url( '/about-us' ) ?>">
                        <span>About Us</span>
                    </a>
                </li>
                <li class="meu-nav-list-item">
                    <a href="<?php echo site_url( '/our-team' ) ?>">
                        <span>Our Team</span>
                    </a>
                </li>
                <li class="meu-nav-list-item">
                    <a href="<?php echo site_url( '/programme' ) ?>">
                        <span>Programme</span>
                    </a>
                </li>
                <li class="meu-nav-list-item">
                    <a href="<?php echo site_url( '/sponsors' ) ?>">
                        <span>Support Us</span>
                    </a>
                </li>
                <li class="meu-nav-list-item">
                    <a href="<?php echo site_url( '/contact' ) ?>">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>

            <!--     Login Container       -->
            <div id="meu-nav-login"></div>
            <div id="meu-nav-login-links">
                <div id="meu-nl-container">
                    <div class="meu-nl-content">
                    <?php if (!$userInfo) { ?>
                        <a href="<?php echo site_url( '/login' ) ?>" id="meu-nl-login">Log In</a> | <a href="<?php echo site_url( '/login' ) ?>" id="meu-nl-register">Register</a>
                        <?php } else { ?>
                        <a href="<?php echo site_url( '/account' ) ?>" id="meu-nl-login"><i class="fa fa-user"></i> &nbsp;My Account</a>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!--     Smartphone - MENU       -->
            <div id="meu-mobile-menu">
                <i id="menu-fa" class="fa fa-bars"></i>
            </div>
        </div>
    </nav>

    <!--     Smartphone - MENU Navigation       -->
    <section id="meu-mobile-menu-collapse" data-aos="fade-down">
        <div class="container-fluid">
            <img id="meu-mobile-menu-logo" src="<?php echo get_template_directory_uri(); ?>/images/MEU_branding/logo_main_white.png" class="img-responsive" alt="meu-logo">

            <ul id="meu-nav-list-mobile" class="list-unstyled">
                <li class="meu-nav-list-item-mobile">
                    <a href="<?php echo site_url( '/about-us' ) ?>" class="meu-link">
                        <span>About Us</span>
                    </a>
                </li>
                <li class="meu-nav-list-item-mobile">
                    <a href="<?php echo site_url( '/our-team' ) ?>" class="meu-link">
                        <span>Our Team</span>
                    </a>
                </li>
                <li class="meu-nav-list-item-mobile">
                    <a href="<?php echo site_url( '/programme' ) ?>" class="meu-link">
                        <span>Programme</span>
                    </a>
                </li>
                <li class="meu-nav-list-item-mobile">
                    <a href="<?php echo site_url( '/sponsors' ) ?>" class="meu-link">
                        <span>Support Us</span>
                    </a>
                </li>
                <li class="meu-nav-list-item-mobile">
                    <a href="<?php echo site_url( '/contact' ) ?>" class="meu-link">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>

            <div id="meu-nav-list-bottom">
                <div id="meu-nav-list-login">LOGIN</div> | <div id="meu-nav-list-register">REGISTER</div>
            </div>
        </div>
    </section>
