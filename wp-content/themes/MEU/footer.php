<?php
/*
    MEU Theme | Footer
	Copyright: 2020, Jan Hamara, www.janhamara.com
    Wordpress v5.4
*/
?>

<?php wp_footer(); ?>

    <footer id="meu-footer">
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

</body>
</html>