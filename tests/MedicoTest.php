<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use app\libraries\Medico;

class MedicoTest extends TestCase{
    
    public function testMedico(){

        $medico = new Medico(1, "Rodrigo Faro", "99999999", "Rua");

        $this->assertEquals(1, $medico->getCRM());
        $this->assertEquals("Rodrigo Faro", $medico->getNome());
        $this->assertEquals("99999999", $medico->getTelefone());
        $this->assertEquals("Rua", $medico->getEndereco());
    }

    public function testVerificarTrue(){
        $this->assertTrue(true);
    }

    public function testVerificarFalse(){
        $this->assertFalse(false);
    }

    public function testSettersAndGetters(){
        $medico = new Medico(1, "Rodrigo Faro", "99999999", "Rua");
        
        $medico->setCRM(9828192);
        $medico->setNome("Faro");
        $medico->setTelefone("88888888");
        $medico->setEndereco("Avenida");

        $this->assertEquals(9828192, $medico->getCRM());
        $this->assertEquals("Faro", $medico->getNome());
        $this->assertEquals("88888888", $medico->getTelefone());
        $this->assertEquals("Avenida", $medico->getEndereco());
    }
}
