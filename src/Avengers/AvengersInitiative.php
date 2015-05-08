<?php

namespace Avengers;

class AvengersInitiative
{
    protected $availableAvengers;
    
    public function addAvenger(\Avengers\Avenger $avenger) {
        $this->availableAvengers[] = $avenger;
    }
    
    public function getAvailableAvengers() {
        return $this->availableAvengers;
    }
}
