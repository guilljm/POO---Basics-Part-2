<?php

class Bicycle
{
    private $currentSpeed;
    public int $nbSeats = 1;
    private string $color;
    public int $nbWheels = 2;


    // Option possible : public function __construct(private string $color) {};
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }


    public function setCurrentSpeed(int $currentSpeed): string
    {
        $this->currentSpeed = $currentSpeed;
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

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}
