<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "lfpedroso@gmail.com";
//2 - resgatar os dados digitados no formulário
$nome = $_POST['formGroupNome'];
$email = $_POST['formGroupEmail'];
$assunto = $_POST['formGroupAssunto'];
$mensagem = $_POST['formGroupMensagem']

//4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagemHTML = '
<strong>Formulário de Contato</strong> 
<p><b>Nome:</b> '.$nome.' <p>
<b>E-Mail:</b> '.$email.' <p>
<b>Assunto:</b> '.$assunto.' <p>
<b>Mensagem:</b> '.$mensagem.'</p>
<hr>';


//5 – agora inserimos as codificações corretas e  tudo mais.
// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
// remetente
$headers .= "Return-Path: $para \r\n";
// return-path
$envio = mail($para, $assunto, $mensagemHTML, $headers);
if($envio)
echo "<script>location.href='sucesso.html'</script>";// Página que será redirecionada
?>
