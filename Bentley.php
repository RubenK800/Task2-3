<?php

class Bentley extends Car
{
    public function __construct($color, $maxSpeed, $gearBox, $year){
        parent::__construct($color, $maxSpeed, $gearBox, $year);
        echo"<br/> Bentley is here<br/>";
    }
}