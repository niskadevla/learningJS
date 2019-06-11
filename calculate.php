<?
  // $services = file('files/price.xlsx');
  $services = file_get_contents('json/services.json');
  // $services = file('json/services.json');
  echo ($services);
?>
