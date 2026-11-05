<?php

  class Stoel {

    private int $zithoogte;
    private string $kleur;

    public function __construct($ingevoerdeKleur, $ingevoerdeZithoogte)
    {
      $this->kleur = $ingevoerdeKleur;
      $this->zithoogte = $ingevoerdeZithoogte;
    }

    public function echoKleur(){
      return "De stoel is: ".$this->kleur;
    }

    public function echoZithoogte() {
      return "Zithoogte rode stoel: " . $this->zithoogte;
    }

    public function verstelZithoogte($nieuweZithoogte){
      $this->zithoogte = $nieuweZithoogte;
      return "Zithoogte na verstelling: " . $this->zithoogte;
    }

  }

?>