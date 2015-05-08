<?php

namespace Avengers\Tests;

use \Mockery as M;

class AvengersInitiativeTest extends \PHPUnit_Framework_TestCase
{
    
    public function tearDown() {
        M::close();
    }
    
    public function testClassAvailable() {
        $nickFury = M::mock('Avengers\People\NickFury');
        $initiative = new \Avengers\AvengersInitiative($nickFury);

        $this->assertNotNull($initiative);
    }
    
    public function testAvengersCanBeAddedToTheRollCall() {
        $nickFury = M::mock('Avengers\People\NickFury');
        $initiative = new \Avengers\AvengersInitiative($nickFury);
        
        $availableAvengers = $initiative->getAvailableAvengers();        
        $this->assertEquals(0, count($availableAvengers));
        
        $avenger = M::mock('Avengers\Avenger');
        $initiative->addAvenger($avenger);
        
        $availableAvengers = $initiative->getAvailableAvengers();        
        $this->assertEquals(1, count($availableAvengers));
    }
    
    public function testAvengersCanBeAssembled() {
        $nickFury = M::mock('Avengers\People\NickFury');
        $initiative = new \Avengers\AvengersInitiative($nickFury);

        $avenger = M::mock('Avengers\Avenger');
        $initiative->addAvenger($avenger);
        
        $assembledAvengers = $initiative->getAssembledAvengers();        
        $this->assertEquals(0, count($assembledAvengers));
        
        $initiative->assemble();
        
        $assembledAvengers = $initiative->getAssembledAvengers();        
        $this->assertEquals(1, count($assembledAvengers));
        
    }
}
