<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use app\libraries\Especialidade;

class EspecialidadeTest extends TestCase{

    public function testEspecialidade(){

        $especialidade = new Especialidade(1, "Cardiologia", "Adultos");

        $this->assertEquals(1, $especialidade->getNumeroRegistro());
        $this->assertEquals("Cardiologia", $especialidade->getNome());
        $this->assertEquals("Adultos", $especialidade->getPublicoAlvo());
    }

    public function testVerificarTrue(){
        $this->assertTrue(true);
    }

    public function testVerificarFalse(){
        $this->assertFalse(false);
    }

    public function testSettersAndGetters(){

        $especialidade = new Especialidade(1, "Cardiologia", "Adultos");

        $especialidade->setNumeroRegistro(32);
        $especialidade->setNome("Dermatologia");
        $especialidade->setPublicoAlvo("Crianças");

        $this->assertEquals(32, $especialidade->getNumeroRegistro());
        $this->assertEquals("Dermatologia", $especialidade->getNome());
        $this->assertEquals("Crianças", $especialidade->getPublicoAlvo());
    }
}
