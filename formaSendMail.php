<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form send email</title>
  <link rel="stylesheet" href="styleSendMail.css">
</head>
<body>
  <div class="container">
    <form class="" action="sendMail.php" method="post" autocomplete="off">
      <label for="to">Введите емейл куда отправлять:</label>
      <input type="mail" id="to" name="to" value="" placeholder="vasya@gmail.com">
      <br/>
      <br/>
      <label for="headers">Введите емейл от кого отправлять:</label>
      <input type="mail" id="headers" name="headers" value="" placeholder="yourMail@gmail.com">
      <br/>
      <br/>
      <label for="message">Введите сообщение:</label>
      <br/>
      <textarea name="message" id="message" rows="8" cols="30" placeholder="Ваше сообщение"></textarea>
      <br/> <br/>
      <label for="subject">Введите тему сообщения:</label>
      <input type="text" id="subject" name="subject" value="" placeholder="Тема: сообщения">
      <br/>
      <br/>
      <input type="submit" name="submit" value="Ok">
    </form>
  </div>
</body>
</html>
