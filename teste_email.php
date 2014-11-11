<?php

require("phpmailer/class.phpmailer.php");

$email = 'jorgematheusv@gmail.com';
//$arquivo = $diretorio . $arq . $codigo . '.pdf'; // anexo
//echo 'Enviando email para ' . $codigo . ' - ' . $nome . ' - ' . $email . '...<br>';
flush();  // para ir liberando o envio dos e-mails durante o while



$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug  = 1;
$mail->SMTP_PORT = "465";
$mail->Host = "<smtp.gmail.com>";
$mail->SMTPAuth = true; 
$mail->Username = 'jorgematheusv@gmail.com'; // Usuário do servidor SMTP
$mail->Password = '$pw013ot'; // Senha do servidor SMTP
$mail->IsHTML(true);
$mail->SetFrom("jorgematheusv@gmail.com", "Teste Talk About");
//$mail->AddReplyTo("<endereco-resposta@blablabla>", "Nome do remetente");
//$mail->From = 'jorgeviegas@livem';
$mail->AddAddress($email,'jorge');
$mail->Subject = "Assunto";
$mail->Body = "Mensagem do corpo <br><br>";
$mail->Body .= "Mensagem do corpo<br><br>";
$mail->Body .= "Prezado(a) ESTA FERA ,<br><br>";
$mail->Body .= "bla bla bla.<br><br>";
$mail->WordWrap = 50;
//$mail->AddAttachment($arquivo);
if (!$mail->Send()) {
    echo 'Erro de envio:'. $mail->ErrorInfo;
}
?>
