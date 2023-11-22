<?php

require_once "Car.php";

$car1 = new Car();
$car1->brand = "Toyota";
$car1->maxSpeed = 250;


$car2 = new Car();
$car2->brand = "Peugeot";
$car2->maxSpeed = 240;


echo "The first car brand is:".$car1->brand;

$car1->honk();
$car1->displayBrand();