<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Send to my email user computer specifications</title>
</head>
<body>

    <?php

      $ip = $_SERVER["REMOTE_ADDR"];
      $userAgent = $_SERVER["HTTP_USER_AGENT"];
      $referer = $_SERVER["HTTP_REFERER"];
      $host = $_SERVER["REMOTE_HOST"];


      //Отправка сообщения на емейл

      $to = "info@infolio.top";
      $subject = "Obratnaya svyaz";
      $message = ' ip = '.$ip.' userAgent = '.$userAgent.' Referer = '.$referer.' host(DNS user) = '.$host;
      $headers = "From: XyUnya@cyku.Het";
      mail($to, $subject, $message, $headers);

      echo "Сообщение отправлено успешно! :) <br />";
      echo "Ваш ip: ".$ip."<br />";
      echo "Ваш данные о компьютере: ".$userAgent."<br />";
      echo "И др... <br />";

    ?>

</body>
</html>
