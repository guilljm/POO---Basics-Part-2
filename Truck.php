<?php

require_once("Vehicle.php");

class Truck extends Vehicle
{
    private int $storage;
    private int $load = 0;
    private string $energy;

    public function __construct(int $storage, string $color, int $nbSeats, string $energy)
    {
        $this->storage = $storage;
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getLoad(): string
    {
        return $this->load;
    }

    public function setLoad(int $load): void
    {
        if (($load + $this->load) <= $this->storage) {
            $this->load += $load;
        }
    }

    public function isFill(): string
    {
        return $this->storage === $this->load ? 'full' : 'in filling ';
    }
}
