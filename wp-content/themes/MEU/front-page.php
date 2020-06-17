<?php
/*
    MEU Theme | Front Page
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
*/
?>

<?php get_header(); ?>

    <!--  -----------------------------------------------------------------------------------------------------------------  -->

    <!--  Covid-19 Alert  -->

    <div id="covid-alert">
        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
        <span class="covid-alert-span">ATTENTION</span>
        <span class="covid-alert-span">|</span>
        DUE TO COMPLICATIONS CAUSED BY THE COVID-19 PANDEMIC, THE CONFERENCE WILL TAKE PLACE <span class="covid-alert-span">ONLINE</span>
        <div id="close-covid-alert">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
    </div>

    <div id="covid-alert-mobile">
        <div class="cam-attention">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <span class="covid-alert-span">ATTENTION</span>
        </div>
        DUE TO COMPLICATIONS CAUSED BY THE COVID-19 PANDEMIC <br/>
        THE CONFERENCE WILL TAKE PLACE <span class="covid-alert-span">ONLINE</span>
        <div id="close-covid-alert-2">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
    </div>

    <!--  -----------------------------------------------------------------------------------------------------------------  -->

    <!--  Login Pop-Up  -->

    <aside id="meu-login">
        <!--        Background        -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/login_bg.jpg" class="meu-login-bg-2 img-responsive" alt="login-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/page_compontents/team_container.png" class="meu-login-bg img-responsive" alt="login-item-bg">
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/login_bg_overlay.png" id="meu-login-overlay" class="img-responsive" alt="login-overlay">
    </aside>

    <!--  -----------------------------------------------------------------------------------------------------------------  -->

<main>

    <header id="meu-header">
        <?php get_template_part( 'template-parts/header/page', 'header' ); ?>
    </header>

    <section id="meu-main-1" class="section-header">
        <?php get_template_part( 'template-parts/page/page', 'main-1' ); ?>
    </section>

    <section id="meu-main-2" class="section-header">
        <?php get_template_part( 'template-parts/page/page', 'main-2' ); ?>
    </section>

    <section id="meu-main-3" class="section-header">
        <?php get_template_part( 'template-parts/page/page', 'main-3' ); ?>
    </section>

    <section id="meu-main-4" class="section-header">
        <?php get_template_part( 'template-parts/page/page', 'main-4' ); ?>
    </section>

<?php get_footer(); ?>