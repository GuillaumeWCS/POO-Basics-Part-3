
<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

// Do not modify the rest of the file

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

}


