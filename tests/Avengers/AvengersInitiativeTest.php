<?php

namespace Avengers\Tests;

class AvengersInitiativeTest extends \PHPUnit_Framework_TestCase
{
    public function testClassAvailable() {
        $initiative = new \Avengers\AvengersInitiative();

        $this->assertNotNull($initiative);
    }
}
