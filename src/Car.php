<?php

namespace App;

class Car{

    private $arrancado;

    public function getLedDeArrancado(){
        return $this->arrancado;
    }
    public function starts(){
         $this->arrancado = true;
    }

}