<?php
class Product
{
    public string $name;
    public float $price;



    public function displayHello()
    {
        echo "Hello";

    }

    public function displayPrice()
    {
        echo $this->price;
    }

    
}