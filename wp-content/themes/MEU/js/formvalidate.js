document.getElementById("meu-submit-form").addEventListener('click', function() {
    alert("im running");
    formSubmit();
});

<!--  -----------------------------------------------------------------------------------------------------------------  -->

function isNotEmpty(values, valueNames) {
    var isNotEmpty = true;
    for (x in values) {
        if (values[x] === "") {
            var errorInput = jQuery('#' + valueNames[x]);
            var errorMsg = jQuery("<div class='errorMessage'></div>").text('Please fill out the information above!');
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
        var errorMsg = jQuery("<div class='errorMessage'></div>").text('The email address above is not correct!');
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
            jQuery.ajax({
                type: "POST",
                url: "send_form.php",
                data: dataString,
                success: function() {
                    form_submitted.css({"opacity": 1, "transform": "scale(1.1)"});
                    meu_form.trigger("reset");
                    setTimeout(function () {
                        form_submitted.css({"opacity": 0, "transform": "scale(0.8)"});
                    }, 3000);
                }
            });
        }
    }
}