<?php

namespace Avengers;

use Avengers\People\Director,
    Avengers\Avenger;

class AvengersInitiative
{
    protected $director;

    protected $availableAvengers;
    protected $assembledAvengers;

    public function __construct(Director $director) {
        $this->director = $director;
    }

    public function addAvenger(Avenger $avenger) {
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
