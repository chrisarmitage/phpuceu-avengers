<?php

namespace Avengers\Tests;

use \Mockery as M;

class AvengersInitiativeTest extends \PHPUnit_Framework_TestCase
{
    protected $initiative;
    
    public function setUp() {
        $nickFury = M::mock('Avengers\People\NickFury');
        $this->initiative = new \Avengers\AvengersInitiative($nickFury);
    }
    
    public function tearDown() {
        M::close();
    }
    
    public function testClassAvailable() {
        $this->assertNotNull($this->initiative);
    }
    
    public function testAvengersCanBeAddedToTheRollCall() {
        $initiative = $this->initiative;
        
        $availableAvengers = $initiative->getAvailableAvengers();        
        $this->assertEquals(0, count($availableAvengers));
        
        $avenger = M::mock('Avengers\Avenger');
        $initiative->addAvenger($avenger);
        
        $availableAvengers = $initiative->getAvailableAvengers();        
        $this->assertEquals(1, count($availableAvengers));
    }
    
    public function testAvengersCanBeAssembled() {
        $initiative = $this->initiative;

        $avenger = M::mock('Avengers\Avenger');
        $initiative->addAvenger($avenger);
        
        $assembledAvengers = $initiative->getAssembledAvengers();        
        $this->assertEquals(0, count($assembledAvengers));
        
        $initiative->assemble();
        
        $assembledAvengers = $initiative->getAssembledAvengers();        
        $this->assertEquals(1, count($assembledAvengers));
        
    }
}
