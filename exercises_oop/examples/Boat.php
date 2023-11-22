<?php
class Boat
{
    public int $cabins;
    public float $maxSpeed;

    public function __construct(int $cabins, float $maxSpeed)
    {
        $this->cabins = $cabins;
        $this->maxSpeed = $maxSpeed;
    }
}