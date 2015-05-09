<?php

namespace Avengers;

use Avengers\People\Director,
    Avengers\Avenger;

/**
 * Class AvengersInitiative
 *
 * @package Avengers
 */
class AvengersInitiative
{
    /**
     * @var Director
     */
    protected $director;

    /**
     * @var Avenger[]
     */
    protected $availableAvengers;

    /**
     * @var Avenger[]
     */
    protected $assembledAvengers;

    /**
     * @param Director $director
     */
    public function __construct(Director $director) {
        $this->director = $director;
    }

    /**
     * @param Avenger $avenger
     */
    public function addAvenger(Avenger $avenger) {
        $this->availableAvengers[] = $avenger;
    }

    /**
     * @return Avenger[]
     */
    public function getAvailableAvengers() {
        return $this->availableAvengers;
    }

    /**
     * @return Avenger[]
     */
    public function getAssembledAvengers() {
        return $this->assembledAvengers;
    }

    /**
     * @todo What does this do?
     */
    public function assemble() {
        $this->assembledAvengers = $this->availableAvengers;
    }
}
