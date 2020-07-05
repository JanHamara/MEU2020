<?php
/*
    Template Name: Account
    MEU Theme | MEU Page Template
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
 */

require 'vendor/autoload.php';
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

<!--                        --><?php //if (!$userInfo) { ?>

<!--                        --><?php //} else { ?>

                        <h1 class="meu-section-heading" data-aos="fade-in" data-aos-delay="800"><span class="meu-yellow">MY ACCOUNT</span></h1>

                        <ul id="meu-account-menu" class="list-unstyled list-inline">
                            <li>
                                <div id="meu-a-1" class="meu-link">
                                    <span>My Application</span>
                                </div>
                            </li>
<!--                            <li>-->
<!--                                <div id="meu-a-2" class="meu-link">-->
<!--                                    <span>My Details</span>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div id="meu-a-3" class="meu-link">-->
<!--                                    <span>Seminars</span>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div id="meu-a-4" class="meu-link">-->
<!--                                    <span>Materials</span>-->
<!--                                </div>-->
<!--                            </li>-->
                        </ul>

                        <section id="meu-account-application">
                            <div class="meu-section-paragraph">
                                <span class="meu-yellow">Application form will be made available very soon!</span>
<!--                                Welcome to your personal application for the <span class="meu-yellow">MEU Bratislava 2020</span>-->
                                <br/>
<!--                                Please fill out and submit the following form to apply for a spot at our conference!-->
                            </div>

<!--                            <div id="meu-application-form">-->
<!--                                <form id="meu-form-2" name="application-form" method="post" action="application_submit.php">-->
<!--                                    <div class="form-group textarea-form-group">-->
<!--                                        <label class="meu-link"><span>Full name</span></label>-->
<!--                                        <input id="ap-name" class="form-control" type="text" name="fullname" placeholder="Input your full name...">-->
<!--                                    </div>-->
<!--                                    <hr/>-->
<!--                                    <div class="form-group textarea-form-group">-->
<!--                                        <label class="meu-link"><span>Nationality</span></label>-->
<!--                                        <input id="ap-nationality" class="form-control" type="text" name="nationality" placeholder="Input your nationality...">-->
<!--                                    </div>-->
<!--                                    <hr/>-->
<!--                                    <div class="form-group textarea-form-group">-->
<!--                                        <label class="meu-link"><span>Date of Birth</span></label>-->
<!--                                        <input id="ap-dob" class="form-control" type="date" name="dob" placeholder="Input your date of birth...">-->
<!--                                    </div>-->
<!--                                    <hr/>-->
<!--                                    <div class="form-group textarea-form-group">-->
<!--                                        <label class="meu-link"><span>Cover Letter</span></label>-->
<!--                                        <div class="af-sublabel">We would like you to talk about your experiences with...</div>-->
<!--                                        <textarea id="ap-cover-letter" class="form-control" name="coverletter" placeholder="Input your cover letter..."></textarea>-->
<!--                                    </div>-->
<!--                                    <hr/>-->
<!--                                    <div class="form-group textarea-form-group">-->
<!--                                        <label class="meu-link"><span>Upload your CV</span></label>-->
<!--                                        <input id="ap-cv" type="file" class="form-control" name="cv"/>-->
<!--                                    </div>-->
<!---->
<!--                                    <hr/>-->
<!--                                    <div class="form-group textarea-form-group">-->
<!--                                        <label class="meu-link"><span>Indicate your position preference</span></label>-->
<!--                                        <input id="ap-position-1" type="checkbox" name="position1"/>-->
<!--                                        <input id="ap-position-2" type="checkbox" name="position2"/>-->
<!--                                        <input id="ap-position-3" type="checkbox" name="position3"/>-->
<!--                                    </div>-->
<!--                                </form>-->
<!--                            </div>-->
                        </section>

                        <section id="meu-account-details">
                            DETAILS
                        </section>

                        <section id="meu-account-seminars">
                            SEMINARS
                        </section>

                        <section id="meu-account-materials">
                            MATERIALS
                        </section>

<!--                        <a href="--><?php //echo site_url( '/logout' ) ?><!--" class="meu-link">-->
<!--                            <span>LOGOUT</span>-->
<!--                        </a>-->

<!--                        --><?php //} ?>

                    <?php endwhile; } ?>

            </div>
        </div>
    </header>

    <?php get_footer(); ?>
