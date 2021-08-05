<?php

class Acura extends Car
{
    public function __construct($color, $maxSpeed, $gearBox, $year){
        parent::__construct($color, $maxSpeed, $gearBox, $year);
        echo"<br/> Acura is here<br/>";
    }
}