<?php
  $headers = 'From: coinbase@slote.me' . "\r\n" .
     'Reply-To: coinbase@slote.me' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
  $object = "! Server Down !";
  $message = "Votre serveur est Down =(";
    mail('mediashare.supp@gmail.com', $object, $message, $headers);
?>
