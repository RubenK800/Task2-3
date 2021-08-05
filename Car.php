<?php

class Car
{
    private $color;
    private $maxSpeed;
    private $currentSpeed = 0;
    private $gearBox;
    private $year;

    public function __construct($color, $maxSpeed, $gearBox, $year){
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
        $this->gearBox = $gearBox;
        $this->year = $year;
        echo"<br/>";
    }

    public function move($speed){
        $this->currentSpeed = $speed;
    }

    public function getColor(){
        echo "color is $this->color<br/>";
    }

    public function getMaxSpeed(){
        echo "max speed is $this->maxSpeed<br/>";
    }

    public function getGearBoxType(){
        echo "gear type is $this->gearBox<br/>";
    }

    public function getYear(){
        echo "year is $this->year<br/>";
    }

    //public function
}