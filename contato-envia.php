<?php
$destinatario = 'liberoadv.recepcao@hotmail.com';
$nome     = isset($_POST['nome'])     ? htmlspecialchars(strip_tags(trim($_POST['nome'])))     : '';
$telefone = isset($_POST['telefone']) ? htmlspecialchars(strip_tags(trim($_POST['telefone']))) : '';
$email    = isset($_POST['email'])    ? htmlspecialchars(strip_tags(trim($_POST['email'])))    : '';
$area     = isset($_POST['area'])     ? htmlspecialchars(strip_tags(trim($_POST['area'])))     : '';
$mensagem = isset($_POST['mensagem']) ? htmlspecialchars(strip_tags(trim($_POST['mensagem']))) : '';

if (empty($nome) || empty($telefone)) {
  header('Location: index.php?enviado=erro'); exit;
}

$assunto = "Contato pelo site: $nome";
$corpo   = "Nome:      $nome\nTelefone:  $telefone\nE-mail:    $email\nÁrea:      $area\n\nMensagem:\n$mensagem";
$headers = "From: site@gerciliberoadvogados.com\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8\r\n";

mail($destinatario, $assunto, $corpo, $headers);
header("Location: index.php?enviado=ok"); exit;
