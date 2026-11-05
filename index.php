<?php
  // gets the code from the FirtClass.php file and makes it available in this file
  include "FirstClass.php";

  // this creates a new chair object with the color red and a sitting height of 60
  $rodeStoel = new chair("rood", 60);

  // this calls the echoKleur, echoZithoogte and verstelZithoogte methods of the chair object and displays the results
  echo $rodeStoel->echoKleur() . "<br>";
  echo $rodeStoel->echoZithoogte() . "<br>";
  echo $rodeStoel->verstelZithoogte(70);
?>