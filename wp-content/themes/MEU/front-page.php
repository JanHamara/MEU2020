<?php
/*
    MEU Theme | Front Page
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
*/
?>

<?php get_header(); ?>

    <!--  -----------------------------------------------------------------------------------------------------------------  -->

    <!--  Privacy Policy  -->

    <div id="privacy-policy" data-aos="zoom-in" data-aos-delay="1500">
        <h3>Personal data & Cookies</h3>
        <p class="pp-1">
            This website collects certain cookies and personal data,
            in order to enable core functionality of the website
            (personal account, social login, contact form),
            as well as to provide you with the best experience with our services.
        </p>
        <p class="pp-2">By using this website, you agree with the collection of this data, as well as with our Privacy Policy.</p>

        <div id="pp-links">
            <div id="pp-agree" class="meu-link">
                <span>I AGREE</span>
            </div>
            <a href="#pp-modal" id="pp-privacy-policy" class="meu-link" data-toggle="modal">
                <span>PRIVACY POLICY</span>
            </a>
        </div>
    </div>

    <div class="modal fade" id="pp-modal" tabindex="-1" role="dialog" aria-labelledby="privacy-policy-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                <?php $query = new WP_Query( "pagename=privacy-policy" ); ?>
                <?php if ( $query->have_posts() ) : $query->the_post(); ?>
                    <h3><?php the_title(); ?></h3>

                    <p><?php the_content(); ?></p>
                <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                    <a href="#" id="close-privacy-policy" data-dismiss="modal">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--  -----------------------------------------------------------------------------------------------------------------  -->

    <!--  Covid-19 Alert  -->

    <div id="covid-alert" data-aos="fade-up" data-aos-delay="1500" data-aos-offset="-1000">
        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
        <span class="covid-alert-span">ATTENTION</span>
        <span class="covid-alert-span">|</span>
        DUE TO COMPLICATIONS CAUSED BY THE COVID-19 PANDEMIC, THIS YEAR'S CONFERENCE WILL BE <span class="covid-alert-span">ONLINE</span>
        <div id="close-covid-alert">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
    </div>

    <div id="covid-alert-mobile" data-aos="fade-up" data-aos-delay="1500" data-aos-offset="-1000">
        <div class="cam-attention">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <span class="covid-alert-span">ATTENTION</span>
        </div>
        DUE TO COMPLICATIONS CAUSED BY THE COVID-19 PANDEMIC <br/>
        THIS YEAR'S EDITION OF THE CONFERENCE WILL BE <span class="covid-alert-span">ONLINE</span>
        <div id="close-covid-alert-2">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
    </div>

    <!--  -----------------------------------------------------------------------------------------------------------------  -->

    <!--  APPLY NOW  -->

    <a href="<?php echo site_url( '/login' ) ?>" id="meu-apply-now-cta" data-aos="fade-left" data-aos-delay="1700" data-aos-offset="-1000">
        <i class="fa fa-edit"></i>APPLY NOW
    </a>

    <!--  -----------------------------------------------------------------------------------------------------------------  -->

<main id="meu-main">

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

    <section id="meu-main-5" class="section-header">
        <?php get_template_part( 'template-parts/page/page', 'main-5' ); ?>
    </section>

<?php get_footer(); ?>