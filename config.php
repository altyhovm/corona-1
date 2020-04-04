<?php
$url = "http://localhost/corona/";
$json=file_get_contents("http://tbiyik.com/covid/api");
$values =  json_decode($json);
usort($values->data, function($a, $b) {
    if ($a->dead == $b->dead) {
        return 0;
    }
    return $a->dead > $b->dead ? -1 : 1;
});


function replace($txt)
{
  $giren = array(" ", "'");
  $cikan = array("-", "");
  $veri = str_replace($giren, $cikan, $txt);
  return $veri;
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> <?php if(isset($_GET["location"])){echo $_GET["location"]; } ?>  - COVID-19 LIVE</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=$url?>style.css">
  </head>
  <body>
