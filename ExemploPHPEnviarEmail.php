<?php
// Define o destinatário e o assunto do e-mail
$para = "destinatario@exemplo.com";
$assunto = "Assunto do e-mail";

// Define o corpo do e-mail
$mensagem = "Olá,\n\nEste é um e-mail de exemplo enviado usando PHP.";

// Define os cabeçalhos do e-mail
$headers = "From: remetente@exemplo.com\r\n";
$headers .= "Reply-To: remetente@exemplo.com\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Envia o e-mail usando a função mail()
if (mail($para, $assunto, $mensagem, $headers)) {
  echo "E-mail enviado com sucesso.";
} else {
  echo "Falha ao enviar o e-mail.";
}
// Neste exemplo, definimos o destinatário e o assunto do e-mail,
// o corpo do e-mail e os cabeçalhos do e-mail, que incluem o endereço de e-mail do remetente, 
// o endereço de resposta e a versão do PHP usada. Em seguida, usamos a função mail() para enviar o e-mail. 
// Se o e-mail for enviado com sucesso, a mensagem "E-mail enviado com sucesso" será exibida, caso contrário, a mensagem "Falha ao enviar o e-mail" será exibida.
?>
