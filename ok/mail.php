<?php
$to      = 'romol05@mail.ru';
$subject = 'Про тебя написали, взглянь';

//$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers = 'Content-type: text/html; charset=utf8' . "\r\n"; 
$headers .= 'From: olga.taterina@mail.ru' . "\r\n" .
    'Reply-To: murod.haydarov@inbox.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$message = "Добрый вечер, Олеся о тебе написали в одноклассниках, посмотри на нее, что ты думаешь ?<a href='http://sari-chashma.tj/ok/'>Ссылку мне Алена отправляла</a>";

mail($to, $subject, $message, $headers);
echo 'ok';
?>