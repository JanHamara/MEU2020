// main.js

// Webpack
require('./bootstrap.min');
require('../css/bootstrap-theme.min.css');
require('../css/bootstrap.min.css');
require('./jquery.cookie');
require('../style.less');

jQuery( document ).ready(function() {

    // ----------------------------------------------------------------------------------------

    // Privacy Consent

    let pp_alert = jQuery("#privacy-policy");
    let pp = false;
    let pp_agree = jQuery("#pp-agree");
    let pp_close = jQuery("#close-privacy-policy");
    let privacy_policy = jQuery("#pp-modal");
    let pp_footer = jQuery("#pp-footer");

    pp_agree.on('click', function() {
        pp = true;
        pp_alert.fadeOut(500);
    });

    pp_close.on('click', function() {
        privacy_policy.fadeOut(500);
    });

    // ----------------------------------------------------------------------------------------

    // About - Full Text

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

    // ----------------------------------------------------------------------------------------

    // Roles Functionality

    let role1 = jQuery("#m2-role-1");
    let role2 = jQuery("#m2-role-2");
    let role3 = jQuery("#m2-role-3");
    let roles = [role1, role2, role3];

    let role1content = jQuery("#m2-role-1-content");
    let role2content = jQuery("#m2-role-2-content");
    let role3content = jQuery("#m2-role-3-content");
    let roleContents = [role1content, role2content, role3content];

    let roleSet1 = [role1, role1content];
    let roleSet2 = [role2, role2content];
    let roleSet3 = [role3, role3content];

    let rolesSet = [roleSet1, roleSet2, roleSet3];

    rolesSet.forEach(element => showRole(element));
    rolesSet.forEach(element => hideRole(element, roles));

    function showRole(element) {
        element[0].on('click', function() {
            roles.forEach(element => hideRoles(element));
            element[1].fadeIn(300);
        });
    }

    function hideRole(element, roles) {
        element[1].on('click', function() {
            element[1].hide();
            roles.forEach(el => el.fadeIn(300));
        });
    }

    function hideRoles(element) {
        element.hide();
    }
});

jQuery( window ).load(function() {
    
});

