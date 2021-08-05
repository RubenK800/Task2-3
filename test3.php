<?php
include 'Car.php';
include 'Acura.php';
include "Audi.php";
include "Bentley.php";

$audi = new Audi('red',20,'mechanical',2000);
$audi->getColor();
$audi->getMaxSpeed();
$audi->getGearBoxType();
$audi->getYear();

$acura = new Acura('grey',20,'automatic',2010);
$acura ->getColor();
$acura->getMaxSpeed();
$acura->getGearBoxType();
$acura->getYear();

$bentley = new Bentley('dark blue',20,'robotic',2025);
$bentley->getColor();
$bentley->getMaxSpeed();
$bentley->getGearBoxType();
$bentley->getYear();