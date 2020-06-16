// main.js

// Webpack
require('./bootstrap.min');
require('../css/bootstrap-theme.min.css');
require('../css/bootstrap.min.css');
require('../style.less');

jQuery( document ).ready(function() {
    let about_read_more = jQuery("meu-about-1");
    let about_read_more_text = document.getElementById("meu-about-1-text");
    let about_collapsible = jQuery("#meu-about-section-hidden");
    let about_on = false;

    about_read_more.on('click', function() {
        if (about_on === false) {
            about_collapsible.fadeIn(100);
            about_read_more_text.innerHTML = "CLOSE";
            about_on = true;
        } else {
            about_collapsible.fadeOut(100);
            about_read_more_text.innerHTML = "READ MORE";
            about_on = false;
        }
    });

    // ----------------------------------------------------------------------------------------

    // Covid Alert
    let close_alert = jQuery("#close-covid-alert");
    let covid_alert = jQuery("#covid-alert");

    close_alert.on('click', function() {
        covid_alert.fadeOut(300);
    });

    // ----------------------------------------------------------------------------------------

    // Login Popup
    let login_close = jQuery("#close-meu-login");
    let login_link = jQuery("#meu-nl-login");
    let register_link = jQuery("#meu-nl-register");
    let meu_login = jQuery("#meu-login");
    let apply_now = jQuery("#meu-apply-now");

    login_link.on('click', function() {
        meu_login.fadeIn(500);
    });

    register_link.on('click', function() {
        meu_login.fadeIn(500);
    });

    apply_now.on('click', function() {
        meu_login.fadeIn(500);
    });

    login_close.on('click', function() {
        meu_login.fadeOut(500);
    });
});

jQuery( window ).load(function() {

});

