<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8">

<title>Ana Maria Silva | anamariasilva.com.br | Formulário de Contato</title>
</head>

<body>
<?php

date_default_timezone_set('America/Sao_Paulo');

$emaildestinatario="email@anamariasilva.com.br";
$assunto="Formulário de Contato do Site";
$nome=$_POST["nome"];
$email=$_POST["email"];
$assuntomensagem=$_POST["assuntomensagem"];
$mensagem=$_POST["mensagem"];

$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "Reply-To: $email\n";
$headers .= "Return-Path: $email\n";
$headers .= "Disposition-Notification-To: email@anamariasilva.com.br\n";
$headers .= "X-Priority: 1\n";

$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

mail ($emaildestinatario,$assunto,
"
$data_envio às $hora_envio <br><br>\n
<strong>$assunto</strong> <br><br>\n
<strong>Nome</strong>: $nome <br>\n
<strong>E-mail</strong>: $email <br>\n
<strong>Assunto</strong>: $assuntomensagem <br>\n
<strong>Mensagem</strong>: $mensagem <br><br>\n",$headers);

echo("<div align='center'><img src='mensagem-enviada-com-sucesso.jpg' alt='Obrigada por entrar em contato! Mensagem enviada com sucesso.'/></div>
		<p align='center'><span style='font-family:Source Sans Pro, Verdana; font-size:18px; color:#7f7f7f'>Contato:</span> <a href='mailto:email@anamariasilva.com.br' style='font-family:Source Sans Pro, Verdana; font-size:18px; color:#3c84b1'>email@anamariasilva.com.br</a></p>
		<p align='center'><span style='font-family:Source Sans Pro, Verdana; font-size:18px; color:#7f7f7f'>voltar para <a href='https://www.anamariasilva.com.br' style='font-family:Source Sans Pro, Verdana; font-size:18px; color:#3c84b1'>www.anamariasilva.com.br</a></span></p>
		"); 
?>

</body>
</html>