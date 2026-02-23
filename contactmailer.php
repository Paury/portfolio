
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\phpmailer\src\Exception.php';
require 'C:\xampp\htdocs\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\phpmailer\src\SMTP.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}

$naam     = htmlspecialchars($_POST['naam']); // dit zijn je id's van je input velden
$bedrijf  = htmlspecialchars($_POST['bedrijf']);// als je het hebt genakt van mij blijft het hetzelfde
$email    = htmlspecialchars($_POST['email']);// niks aan doen dan
$waarom = htmlspecialchars($_POST['waarom']);
//$message  = nl2br(htmlspecialchars($_POST['message']));


//date_default_timezone_set('Etc/UTC');

$mail = new PHPMailer();
//Tell PHPMailer to use SMTP






$mail->isSMTP();
//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server

$mail->Host = 'smtp.gmail.com'; // alleen veranderen als je iets ander gebruikt dan gmail aka zoek het op
//Set the SMTP port number - likely to be 25, 465 or 587

$mail->Port = 465; // zelfde als host als je iets ander gebruikt zoek
//Whether to use SMTP authentication

$mail->SMTPSecure = 'ssl';

$mail->SMTPAuth = true;
//Username to use for SMTP authentication

$mail->Username = 'paury3008@gmail.com'; //je email hier zetten
//Password to use for SMTP authentication

$mail->Password = 'qjli wehh ensk khts'; //hier je wachtwoord
                            // als je Gmail gebruikt moet je een app wachtwoord aanmaken!!
//Set who the message is to be sent from

//$mail->setFrom('', 'First Last');
//Set an alternative reply-to address

$mail->addReplyTo('mcambier2008@gmail.com', 'First Last');// je email hier ook
//Set who the message is to be sent to

$mail->addAddress('mcambier2008@gmail.com', 'John Doe'); //je kan hier ook je mail zetten maar ook die van tijmen 
//Set the subject line

$mail->Subject = 'PHPMailer SMTP test'; // spreekt voor zich de titel van je mail
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually

$mail->AltBody = 'This is a plain-text message body'; // dit weet ik ook niet
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');


// die body is een beetje gay ma je moet je id van boven pakken
$mail->Body ="<h2>Nieuw contactformulier bericht</h2>
<p><strong>Naam:</strong> {$naam}</p>
<p><strong>Bedrijf: </strong> {$bedrijf}
<p><strong>Email:</strong> {$email}</p>
<p><strong>Bericht:</strong><br>{$waarom}</p>
";

//SMTP XCLIENT attributes can be passed with setSMTPXclientAttribute method
//$mail->setSMTPXclientAttribute('LOGIN', 'yourname@example.com');
//$mail->setSMTPXclientAttribute('ADDR', '10.10.10.10');
//$mail->setSMTPXclientAttribute('HELO', 'test.example.com');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<div id="success-message" style="padding:10px; background-color: #d4edda; color: #155724; border-radius:5px;">
            Message successfully sent! Je wordt zo teruggebracht naar de homepage...
          </div>
          <script>
            // Wacht 5 seconden, redirect dan naar index.html
            setTimeout(function() {
                window.location.href = "index.html";
            }, 5000);
          </script>';
}
