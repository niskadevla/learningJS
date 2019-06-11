<?php
  // print_r($_REQUEST);
  // echo $_REQUEST["name"];
  if($_POST["name"] == "")
    echo "Vvedite imya: <a href='/'> Ispravit </a>";
  else
    header("Location: les19_obrabotka_formy.php");
?>
