<?php
  include "FirstClass.php";

  $rodeStoel = new Stoel("rood", 60);

  echo $rodeStoel->echoKleur() . "<br>";
  echo $rodeStoel->echoZithoogte() . "<br>";
  echo $rodeStoel->verstelZithoogte(70);
?>