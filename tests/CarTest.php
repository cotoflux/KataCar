<?php

use App\Car;
use PHPUnit\Framework\TestCase;

final class CarTest extends TestCase
{
    public function test_Starts_Car_With_Gas()
    {
        $car= new Car();
        $car->gas = true;
        
        $car->starts();

        $this->AssertTrue($car->getLedDeArrancado());
    }
}