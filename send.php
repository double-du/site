<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

// Recebe os dados do formulário
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

// Configurações do SMTP
$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->isSMTP();
    $mail->Host = 'smtp.umbler.com'; // Servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'site@eduardoaf.dev.br'; // Seu e-mail SMTP
    $mail->Password = 'site*102030'; // Sua senha SMTP
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Ou ENCRYPTION_SMTPS para SSL
    $mail->Port = 587; // Porta SMTP (587 para TLS, 465 para SSL)

    // Remetente e destinatário
    $mail->setFrom('site@eduardoaf.dev.br', 'Site');
    $mail->addAddress('eduardohppa@gmail.com', "Eduardo");
    
    // Responder para
    $mail->addReplyTo($email, $nome);

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Você tem um contatinho ;D';
    $mail->Body    = "
        <h1>Nova mensagem de contato</h1>
        <p><strong>Nome:</strong> {$nome}</p>
        <p><strong>E-mail:</strong> {$email}</p>
        <p><strong>Mensagem:</strong><br>{$mensagem}</p>
    ";
    $mail->AltBody = "Nome: {$nome}\nE-mail: {$email}\nMensagem: {$mensagem}";

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Mensagem enviada com sucesso!']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => "Erro ao enviar mensagem: {$mail->ErrorInfo}"]);
}