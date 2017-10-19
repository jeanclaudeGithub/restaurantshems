<?php // Fetching Values from URL.
$name = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];
$tel = $_POST['phone'];
$subject="Bonjour";
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
    . 'Email:' . $emailForm . '<br/>'
    . 'Subject:' . $subject . '<br/>'
    . 'Message:' . $message . '<br/><br/>'
    . 'Ceci est une confirmation de l\'envoi de courriel du contact.'
    . '<br/>'
    . 'Nous allons vous contacter le plus tôt possible .</div>';
    $sendmessage = "<div style=\"background-color:#7E7E7E; color:white;\">" . $template . "</div>";
    // Message lines should not exceed 70 characters (PHP rule), so wrap it.
    $sendmessage = wordwrap($sendmessage, 70);
    // Send mail by PHP Mail Function.
    mail("n.oularabi@gmail.com", $subject, $sendmessage, $headers);
    echo "Your Query has been received, We will contact you soon.";
} else {
    echo "<span>* invalid email *</span>";
}
?>