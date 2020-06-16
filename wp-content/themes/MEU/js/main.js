// main.js

// Webpack
require('./bootstrap.min');
require('../css/bootstrap-theme.min.css');
require('../css/bootstrap.min.css');
require('../style.less');

jQuery( document ).ready(function() {
    let about_read_more = document.getElementById("meu-about-1");
    let about_read_more_text = document.getElementById("meu-about-1-text");
    let about_collapsible = jQuery("#meu-about-section-hidden");
    let about_on = false;
    let close_alert = jQuery("#close-covid-alert");
    let covid_alert = jQuery("#covid-alert");

    close_alert.on('click', function() {
        covid_alert.fadeOut(300);
    });

    about_read_more.addEventListener('click', function() {
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
});

jQuery( window ).load(function() {

});

