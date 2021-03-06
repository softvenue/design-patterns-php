<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Creational;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Factory\VehicleFactory;
use Patterns\Creational\Factory\Manufacturers\Toyota;

final class FactoryTest extends TestCase 
{
    
    private $factory;

    protected function setUp(): void
    {
        parent::setUp();
        $this->factory = new VehicleFactory();
    }

    public function testCanMakeCar() 
    {
        $factory = new VehicleFactory();
        $this->assertInstanceOf(Toyota::class, $this->factory->makeToyota());
        
    }
}