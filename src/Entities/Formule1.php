<?php

class Formule1{

    private int $speed = 0;

    public function drive(): string
    {
        return "Vroom vroom à {$this->speed} km/h <br>";
    }

    public function shiftGear(int $nombre): self
    {
        $this->speed += $nombre;
        return $this;
    }

}