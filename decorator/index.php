<?php

interface CarService
{
    public function getCost();

    public function getDescription();
}

//car repair shop example
class BasicInspection implements CarService
{
    public function getCost()
    {
        return 140;
    }

    public function getDescription()
    {
        return 'Basic Inspection';
    }
}

class OilChange implements CarService
{
    protected $carService;

    function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 30 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ", and an oil change";
    }
}

class TireRotation implements CarService
{
    protected $carService;

    function __construct($carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 99 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ", and a tire rotation.";
    }
}

$fullService = new TireRotation(new OilChange(new BasicInspection));

echo $fullService->getCost();