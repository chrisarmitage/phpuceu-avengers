<?php

namespace Avengers;

class AvengersInitiative
{
    protected $availableAvengers;
    protected $assembledAvengers;
    
    public function addAvenger(\Avengers\Avenger $avenger) {
        $this->availableAvengers[] = $avenger;
    }
    
    public function getAvailableAvengers() {
        return $this->availableAvengers;
    }
    
    public function getAssembledAvengers() {
        return $this->assembledAvengers;
    }
    
    public function assemble() {
        $this->assembledAvengers = $this->availableAvengers;
    }
}
