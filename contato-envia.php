<?php
header('Content-Type: application/json; charset=UTF-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

/* ── Configurações ── */
define('SMTP_USER', 'gercilibero@gerciliberoeadvogados.com');
define('SMTP_PASS', 'rais daxy wjyt hoaj');
define('MAIL_DEST', 'liberoadv.recepcao@hotmail.com');

/* ── Capturar dados do formulário ── */
$nome     = isset($_POST['nome'])     ? htmlspecialchars(strip_tags(trim($_POST['nome'])))     : '';
$telefone = isset($_POST['telefone']) ? htmlspecialchars(strip_tags(trim($_POST['telefone']))) : '';
$email    = isset($_POST['email'])    ? htmlspecialchars(strip_tags(trim($_POST['email'])))    : '';
$area     = isset($_POST['area'])     ? htmlspecialchars(strip_tags(trim($_POST['area'])))     : '';
$mensagem = isset($_POST['mensagem']) ? htmlspecialchars(strip_tags(trim($_POST['mensagem']))) : '';

/* ── Validação mínima ── */
if (empty($nome) || empty($telefone)) {
  echo json_encode(['status' => 'erro', 'msg' => 'Campos obrigatórios não preenchidos']);
  exit;
}

/* ── Montar e enviar e-mail ── */
$mail = new PHPMailer(true);

try {
  /* Configuração SMTP */
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = SMTP_USER;
  $mail->Password   = SMTP_PASS;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = 587;
  $mail->CharSet    = 'UTF-8';

  /* Remetente e destinatário */
  $mail->setFrom(SMTP_USER, 'Site Gérci Libero Advogados');
  $mail->addAddress(MAIL_DEST);
  if (!empty($email)) {
    $mail->addReplyTo($email, $nome);
  }

  /* Conteúdo */
  $mail->isHTML(true);
  $mail->Subject = "Novo contato pelo site: {$nome}";
  $mail->Body    = "
    <html><body style='font-family:Arial,sans-serif;color:#333;'>
      <h2 style='color:#1A4B8C;'>Novo contato pelo site</h2>
      <table style='width:100%;border-collapse:collapse;'>
        <tr><td style='padding:8px;border-bottom:1px solid #eee;'><strong>Nome</strong></td><td style='padding:8px;border-bottom:1px solid #eee;'>{$nome}</td></tr>
        <tr><td style='padding:8px;border-bottom:1px solid #eee;'><strong>Telefone</strong></td><td style='padding:8px;border-bottom:1px solid #eee;'>{$telefone}</td></tr>
        <tr><td style='padding:8px;border-bottom:1px solid #eee;'><strong>E-mail</strong></td><td style='padding:8px;border-bottom:1px solid #eee;'>{$email}</td></tr>
        <tr><td style='padding:8px;border-bottom:1px solid #eee;'><strong>Área</strong></td><td style='padding:8px;border-bottom:1px solid #eee;'>{$area}</td></tr>
        <tr><td style='padding:8px;'><strong>Mensagem</strong></td><td style='padding:8px;'>{$mensagem}</td></tr>
      </table>
    </body></html>
  ";
  $mail->AltBody = "Nome: {$nome}\nTelefone: {$telefone}\nE-mail: {$email}\nÁrea: {$area}\n\nMensagem:\n{$mensagem}";

  $mail->send();
  echo json_encode(['status' => 'ok']);

} catch (Exception $e) {
  error_log('PHPMailer erro: ' . $mail->ErrorInfo);
  echo json_encode(['status' => 'erro', 'msg' => $mail->ErrorInfo]);
}
exit;
