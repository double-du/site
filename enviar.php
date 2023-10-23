<?php

require 'libs/phpmailer/PHPMailerAutoload.php';

$nome = $_GET['nome'];
$email = $_GET['email'];
$msg = $_GET['msg'];

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->CharSet = "UTF-8";

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = "smtp.umbler.com";

//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication
$mail->Username = "site@eduardoaf.dev.br";

//Password to use for SMTP authentication
$mail->Password = "Site*102030";

//Set who the message is to be sent from
$mail->setFrom('site@eduardoaf.dev.br', 'Eduardo Roboto');

//Set an alternative reply-to address
$mail->addReplyTo($email, $nome);

//Set who the message is to be sent to
$mail->addAddress('site@eduardoaf.dev.br', 'Eduardo de Carne e Osso');

//Set the subject line
$mail->Subject = 'Contato via Site';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->msgHTML("<p style='font-size: 18px; font-family: sans-serif; color: #090909; line-height: 22px'>Oi Edu!</p>
<p style='font-size: 18px; font-family: sans-serif; color: #090909; line-height: 22px'>Você recebeu um novo contato de <b>$_GET[nome]</b> pelo email: <i>$_GET[email]</i></p>
<p style='font-size: 18px; font-family: sans-serif; color: #090909; line-height: 22px'>Ele disse:</p>
<p style='font-size: 18px; font-family: sans-serif; color: #090909; line-height: 22px'>\"<i>$_GET[msg]</i>\"</p>
<p style='font-size: 18px; font-family: sans-serif; color: #090909; line-height: 22px'>Ao responder esse e-mail, ele será enviado diretamente para $nome</p>");

//Replace the plain text body with one created manually
// $mail->AltBody = 'This is a plain-text message body';

//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    $arr = [
        'works' => false
    ];
} else {
    $arr = [
        'works' => true
    ];
}
echo json_encode($arr);