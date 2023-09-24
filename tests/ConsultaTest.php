<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use app\libraries\Consulta;

class ConsultaTest extends TestCase{

    public function testConsulta(){

        $consulta = new Consulta(1, "2023-09-23", "14:30");

        $this->assertEquals(1, $consulta->getNumeroConsulta());
        $this->assertEquals("2023-09-23", $consulta->getData());
        $this->assertEquals("14:30", $consulta->getHora());
    }

    public function testVerificarTrue(){
        $this->assertTrue(true);
    }

    public function testVerificarFalse(){
        $this->assertFalse(false);
    }

    public function testSettersAndGetters(){
        
        $consulta = new Consulta(1, "2023-09-23", "14:30");

        $consulta->setNumeroConsulta(2377281);
        $consulta->setData("2023-09-24");
        $consulta->setHora("15:00");

        $this->assertEquals(2377281, $consulta->getNumeroConsulta());
        $this->assertEquals("2023-09-24", $consulta->getData());
        $this->assertEquals("15:00", $consulta->getHora());
    }
}
