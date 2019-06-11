<?php
  //Отправка сообщения на емейл

    $to = "info@infolio.top";
    $subject = "Obratnaya svyaz";
    $message = "Hello eto Ya!!! )))";
    $headers = "From: Xyjnya@cyku.Het";
    mail($to, $subject, $message, $headers);
    echo "Сообщение отправлено успешно!";

// function sendMail($to, $subject, $message, $headers)   {
//   }
?>
