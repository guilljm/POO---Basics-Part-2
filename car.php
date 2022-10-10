<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private int $nbSeats;
    public string $color;
    public string $energy;
    private int $energylevel;


    // Option possible : public function __construct(private string $color) {};
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start(int $startspeed): string

    {
        $this->currentSpeed = $startspeed;
        return "Go !";
    }

    public function forward(): string

    {
        $this->currentSpeed++;
        return "Forward !";
    }


    public function brake(): string
    {
        $sentence = "";

        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }

        $sentence .= "I'm stopped !";

        return $sentence;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function getEnergyLevel(): int
    {
        return $this->energylevel;
    }
}
