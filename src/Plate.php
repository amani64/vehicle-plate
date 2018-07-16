<?php

namespace Amani\VehiclePlate;


class Plate
{

    public $plate;


    public function set($plate)
    {
        $this->plate = $plate;
    }

    public function validate()
    {
        $platePart = explode(' ', $this->plate);
        return $platePart;
    }
}