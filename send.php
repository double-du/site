<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Recebe os dados do formulário
$nome = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$assunto = $_POST['subject'] ?? '';
$mensagem = $_POST['message'] ?? '';

// Configurações do SMTP
$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->isSMTP();
    $mail->Host = 'smtp.umbler.com'; // Servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'site@eduardoaf.dev.br'; // Seu e-mail SMTP
    $mail->Password = $_ENV['EMAIL_PASS']; // Sua senha SMTP
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Ou ENCRYPTION_SMTPS para SSL
    $mail->Port = 587; // Porta SMTP (587 para TLS, 465 para SSL)

    // Remetente e destinatário
    $mail->setFrom('site@eduardoaf.dev.br', 'Site');
    $mail->addAddress('site@eduardoaf.dev.br', "Site");
    
    // Responder para
    $mail->addReplyTo($email, $nome);

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Vc tem um contatinho ;D';
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