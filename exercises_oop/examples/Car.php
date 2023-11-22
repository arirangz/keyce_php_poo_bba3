<?php
class Car
{
    public string $brand;
    public float $maxSpeed;

    public function honk()
    {
        echo "bip bip!!!";
    }

    public function displayBrand()
    {
        echo $this->brand;
    }
}