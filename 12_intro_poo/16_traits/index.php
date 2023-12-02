<?php

  trait Objeto {

    public function teste() {
      echo "Testando trait de objeto <br>";
    }
    
  }

  class Central {
    use Objeto;
  }


  $mesa = new Central;
  $mesa->teste();