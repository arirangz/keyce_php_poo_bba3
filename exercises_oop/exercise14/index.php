<?php

require_once "Product.php";

$product1 = new Product();

$product1->name = "Dell Computer";
$product1->price = 1200;

$product1->displayHello();
$product1->displayPrice();