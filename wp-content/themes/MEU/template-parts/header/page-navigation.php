<?php
/*
    MEU Theme | Page Navigation
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
*/
?>

    <div id="nav-top-bar"></div>

    <nav id="meu-navigation">
        <div class="container-fluid">
            <!--     Navigation Background       -->
            <img id="meu-nav-bg" src="<?php echo get_template_directory_uri(); ?>/images/page_compontents/navigation_bar.png" class="img-responsive" alt="nav-bg">

            <!--     Navigation Logo       -->
            <a id="meu-nav-home" href="<?php echo home_url() ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsive" alt="beta-logo">
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
                        <div id="meu-nl-login">Log In</div> | <div id="meu-nl-register">Register</div>
                    </div>
                </div>
            </div>
        </div>
    </nav>