<?php

namespace Avengers;

class AvengersInitiative
{
    protected $director;
    
    protected $availableAvengers;
    protected $assembledAvengers;
    
    public function __construct(\Avengers\People\NickFury $director) {
        $this->director = $director;
    }
    
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
