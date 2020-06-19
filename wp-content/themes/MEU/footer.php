<?php
/*
    MEU Theme | Footer
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
*/
?>

<?php wp_footer(); ?>

    <footer id="meu-footer" data-aos="fade-up" data-aos-delay="2000" data-aos-offset="-5000">
        <div class="container-fluid">

            <!--     Footer Background       -->
            <img id="meu-footer-bg" src="<?php echo get_template_directory_uri(); ?>/images/page_compontents/footer_bar.png" class="img-responsive" alt="footer-bg">

            <div class="meu-footer-content">
                <div class="meu-fc-container">
                    <!--     Social Media      -->
                    <ul id="meu-social-media" class="list-unstyled list-inline">
                        <!--     Facebook      -->
                        <li>
                           <a href="https://www.facebook.com/BETASlovakia" target="_blank">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook_icon.png" class="img-responsive" alt="facebook-logo">
                           </a>
                        </li>
                        <!--     Instagram      -->
                        <li>
                            <a href="https://www.instagram.com/beta_slovakia/" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/instagram_icon.png" class="img-responsive" alt="instagram-logo">
                            </a>
                        </li>
                        <!--     LinkedIn      -->
                        <li>
                            <a href="https://www.linkedin.com/betaslovakia" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin_icon.png" class="img-responsive" alt="linkedin-logo">
                            </a>
                        </li>
                    </ul>

                    <!--     Sponsored By      -->
                    <span class="meu-fc-thumb-text">Sponsored by</span>

                    <!--     V4 Logo      -->
                    <img id="meu-footer-V4" src="<?php echo get_template_directory_uri(); ?>/images/logos/V4_logo.png" class="img-responsive" alt="V4-logo">
                </div>
            </div>
        </div>

        <!--     Footer Bottom Line       -->
        <div id="footer-bottom-bar"></div>
    </footer>

</main>

<script>
    jQuery( document ).ready(function() {

    });
</script>

<!--  Smooth Scrolling  -->
<script>
    jQuery('a[href]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    jQuery('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = jQuery(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });
</script>

<!--  -----------------------------------------------------------------------------------------------------------------  -->

<!--    Additional Scripts    -->
<!--<script type="text/javascript" src="./js/formvalidate.js"></script>-->

<!--       AOS JS       -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--        In case 2.3.1 version was not available I load this one -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    jQuery("#meu-submit-form").on('click', function() {
        formSubmit();
    });

    function isNotEmpty(values, valueNames) {
        var isNotEmpty = true;
        for (x in values) {
            if (values[x] === "") {
                var errorInput = jQuery('#' + valueNames[x]);
                var errorMsg = jQuery("<div class='errorMessage'></div>").text('/ Please fill out the information above');
                errorInput.after(errorMsg);
                isNotEmpty = false;
            }
        }
        return isNotEmpty;
    }

    function validateForm() {
        var name = jQuery('#meu-form-text').val();
        var email =  jQuery('#meu-form-email').val();
        var message = jQuery('#meu-form-message').val();
        var formValues = [name, email, message];
        var formValuesNames = ["meu-form-text", "meu-form-email", "meu-form-message"];
        if (isNotEmpty(formValues, formValuesNames)) {
            return true;
        } else {
            return false;
        }
    }

    function validateMail() {
        var email =  jQuery('#meu-form-email');
        // This is a Regex expression to test for email address format
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(email.val().match(mailformat)) {
            return true;
        } else {
            var errorMsg = jQuery("<div class='errorMessage'></div>").text('/ The email address above is not correct');
            email.after(errorMsg);
            email.focus();
            return false;
        }
    }

    function formSubmit(value) {
        (jQuery('.errorMessage')).remove();
        let meu_form = jQuery('#meu-form');
        let form_submitted = jQuery('.form-submitted');
        // Check if all fields are filled
        if (validateForm()) {
            // Check for validity of email address
            if (validateMail()) {
                var dataString = meu_form.serialize();
                form_submitted.css({"opacity": 1});
                meu_form.trigger("reset");
                setTimeout(function () {
                    form_submitted.css({"opacity": 0});
                }, 3000);
                jQuery.ajax({
                    type: "POST",
                    url: "send_form.php",
                    data: dataString,
                    success: function() {
                        form_submitted.css({"opacity": 1});
                        meu_form.trigger("reset");
                        setTimeout(function () {
                            form_submitted.css({"opacity": 0});
                        }, 3000);
                    }
                });
            }
        }
    }
</script>

<!--  -----------------------------------------------------------------------------------------------------------------  -->

</body>
</html>