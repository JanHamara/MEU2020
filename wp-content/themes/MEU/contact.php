<?php
/*
    Template Name: Contact
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

                        <h1 class="meu-section-heading" data-aos="fade-in" data-aos-delay="800"><span class="meu-yellow">CONTACT US</span> WITH ANY ENQUIRY</h1>

                        <div id="meu-contact-form" data-aos="fade-in" data-aos-delay="1100">
                            <form id="meu-form" name="contact-form" method="post" action="send-form.php">
                                <div class="form-group inline-form-group">
                                    <input id="meu-form-text" class="form-control" type="text" name="name" placeholder="Your Name">
                                </div>
                                <div class="form-group inline-form-group">
                                    <input id="meu-form-email" class="form-control" type="text" name="email" placeholder="Your Email" autocomplete="new-password">
                                </div>
                                <div class="form-group textarea-form-group">
                                    <textarea id="meu-form-message" class="form-control" name="message" placeholder="Your Message"></textarea>
                                </div>
                            </form>
                        </div>

                        <div id="meu-submit-form" class="meu-link" data-aos="fade-in" data-aos-delay="1500" data-aos-offset="-1000">
                            <span>SEND</span>
                        </div>

                        <span class="form-submitted">Thank you for your message. We will be in touch as soon as possible!</span>

                    <?php endwhile; } ?>

            </div>
        </div>
    </header>

<?php get_footer(); ?>