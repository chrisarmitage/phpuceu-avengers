<?php

namespace Avengers\Tests;

use \Mockery as M;

class AvengersInitiativeTest extends \PHPUnit_Framework_TestCase
{
    
    public function tearDown() {
        M::close();
    }
    
    public function testClassAvailable() {
        $initiative = new \Avengers\AvengersInitiative();

        $this->assertNotNull($initiative);
    }
    
    public function testAvengersCanBeAddedToTheRollCall() {
        $initiative = new \Avengers\AvengersInitiative();
        
        $availableAvengers = $initiative->getAvailableAvengers();        
        $this->assertEquals(0, count($availableAvengers));
        
        $avenger = M::mock('Avengers\Avenger');
        $initiative->addAvenger($avenger);
        
        $availableAvengers = $initiative->getAvailableAvengers();        
        $this->assertEquals(1, count($availableAvengers));
    }
}
