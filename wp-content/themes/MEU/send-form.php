<?php

require('../../../wp-load.php');

if(isset($_POST['email'])) {
    $email_to = "contact@meubratislava.eu";
    $email_subject = "New message from [ www.meubratislava.eu ]";
    function died($error) {
        // Even though I validate data at front-end with Javascript, it is generally advised to test data in back end too
        // Therefore I verify correctness of data with PHP too, just to demonstrate how it is possible to be done
        echo "Sorry, but there has been an error in your contact form!";
        echo "These errors show below:<br /><br />";
        echo $error."<br /><br />";
        echo "Please return to the contact form and fix these errors<br /><br />";
        die();
    }
    // if validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('Sorry, but there has been an error in your contact form!');
    }
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $message = $_POST['message'];
    $email_from = "contact@meubratislava.eu";
    $error_message = "";


    $email_message = "New message from [ www.meubratislava.eu ]:\n\n";
    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($mail)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
// create email headers
    $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    if (@wp_mail($email_to, $email_subject, $email_message, $headers)) {
        echo "SEND MAIL: Success";
    } else {
        echo "SEND MAIL: Failed";
    }
}
?>