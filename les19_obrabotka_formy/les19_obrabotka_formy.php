<?php
  if (isset($_POST["done"])) {
    if($_POST["name"] == "")
      echo "Vvedite imya: <a href='/les19_obrabotka_formy/les19_obrabotka_formy.php'> Correct </a>";
    else
      header("Location: les19_obrabotka_formy.php");
  }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Форма</title>
</head>
<body>
  <form name="test" action="" method="post" >
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="" placeholder="vasya">
    <br/>
    <br/>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value="" placeholder="*****">
    <br/>
    <br/>
    <label for="mail">Email:</label>
    <input type="text" id="mail" name="mail" value="" placeholder="yourMail@gmail.com">
    <br/>
    <br/>
    <label for="message">Введите сообщение:</label>
    <br/>
    <textarea name="message" id="message" rows="8" cols="30" placeholder="Ваше сообщение" style="resize: none;"></textarea>
    <br/> <br/>
    <input type="submit" name="done" value="Ok">
  </form>
</body>
</html>
