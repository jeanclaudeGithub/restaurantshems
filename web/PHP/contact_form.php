<?php
// Fetching Values from URL.
$name = $_POST['name'];
$emailFrom = $_POST['emailFrom'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$emailFrom = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
// After sanitization Validation is performed
if (filter_var($emailFrom, FILTER_VALIDATE_EMAIL)) {
    //$subject = $name;
    // To send HTML mail, the Content-type header must be set.
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:' . $emailFrom. "\r\n"; // Sender's Email
    $headers .= 'Cc:' . $emailFrom. "\r\n"; // Carbon copy to Sender
    $template = '<div style="padding:50px; color:white;">Hello ' . $name . ',<br/>'
    .'<br/>Thank you...! For Contacting Us.<br/><br/>'
    . 'Name:' . $name . '<br/>'
    . 'Email:' . $email . '<br/>'
    . 'Subject:' . $subject . '<br/>'
    . 'Message:' . $message . '<br/><br/>'
    . 'This is a Contact Confirmation mail.'
    . '<br/>'
    . 'We Will contact You as soon as possible .</div>';
    $sendmessage = "<div style=\"background-color:#7E7E7E; color:white;\">" . $template . "</div>";
    // Message lines should not exceed 70 characters (PHP rule), so wrap it.
    $sendmessage = wordwrap($sendmessage, 70);
    // Send mail by PHP Mail Function.
    mail("receiver_email_id@abc.com", $subject, $sendmessage, $headers);
    echo "Your Query has been received, We will contact you soon.";
} else {
    echo "<span>* invalid email *</span>";
}
?>