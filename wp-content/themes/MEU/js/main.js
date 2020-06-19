// main.js

// Webpack
require('./bootstrap.min');
require('../css/bootstrap-theme.min.css');
require('../css/bootstrap.min.css');
require('../style.less');

jQuery( document ).ready(function() {
    let about_read_more = jQuery("#meu-about-1");
    let about_read_more_text = document.getElementById("meu-about-1-text");
    let about_collapsible = jQuery("#meu-about-section-hidden");
    let about_on = false;

    about_read_more.on('click', function() {
        if (about_on === false) {
            about_collapsible.fadeIn(300);
            about_read_more_text.innerHTML = "CLOSE";
            about_on = true;
        } else {
            about_collapsible.fadeOut(300);
            about_read_more_text.innerHTML = "READ MORE";
            about_on = false;
        }
    });

    // ----------------------------------------------------------------------------------------

    // Covid Alert

    let close_alert = jQuery("#close-covid-alert");
    let close_alert_2 = jQuery("#close-covid-alert-2");
    let covid_alert = jQuery("#covid-alert");
    let covid_alert_mobile = jQuery("#covid-alert-mobile");

    close_alert.on('click', function() {
        covid_alert.fadeOut(300);
    });

    close_alert_2.on('click', function() {
        covid_alert_mobile.fadeOut(300);
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

    // ----------------------------------------------------------------------------------------

    // Menu

    let menu_collapse = jQuery("#meu-mobile-menu-collapse");
    let menu_switch = jQuery("#meu-mobile-menu");
    let menu = false;
    let menu_icon = document.getElementById("menu-fa");
    let main_content = jQuery("#meu-main");

    menu_switch.on('click', function() {
        toggleMenu(menu_collapse, menu, menu_icon);
    });

    function toggleMenu(menu_collapse, menu_state, menu_icon) {
        if (menu === false) {
            menu_collapse.fadeIn(200);
            menu = true;
            menu_icon.classList.replace("fa-bars", "fa-times");
            main_content.hide();
        } else {
            menu_collapse.fadeOut(200);
            menu = false;
            menu_icon.classList.replace("fa-times", "fa-bars");
            main_content.show();
        }
    }
});

jQuery( window ).load(function() {
    AOS.init({
        // And I set default options for animations, such as duration or delay
        delay: 200,
        duration: 1000,
        easing: 'ease',
    });
});

