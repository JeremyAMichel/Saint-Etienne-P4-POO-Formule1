<?php

class Formule1{

    private $speed = 0;

    public function drive()
    {
        return "Vroom vroom à {$this->speed} km/h <br>";
    }

    public function shiftGear($nombre)
    {
        $this->speed += $nombre;
        return $this;
    }

}