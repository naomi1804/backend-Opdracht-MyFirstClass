<?php

// makes the clase chair  
class chair {

    // these are private (not accessible outside of the class) properties (variables) 
    private int $sitheight;
    private string $color;

    // this is the constructor (blueprint) of the class
    public function __construct($inputtedcolor, $inputtedsitheight)
    {
      $this->color = $inputtedcolor;
      $this->sitheight = $inputtedsitheight;
    }

    // this returns the color of the chair
    public function echoKleur(){
      return "De stoel is: ".$this->color;
    }

    // this returns the sitting height of the chair
    public function echoZithoogte() {
      return "Zithoogte rode stoel: " . $this->sitheight;
    }

    // this changes the sitting height of the chair
    public function verstelZithoogte($newsitheight){
      $this->sitheight = $newsitheight;
      return "Zithoogte na verstelling: " . $this->sitheight;
    }

  }

?>