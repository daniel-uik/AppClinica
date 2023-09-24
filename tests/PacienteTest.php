<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use app\libraries\Paciente;

class PacienteTest extends TestCase{

    public function testPaciente(){
        
        $paciente = new Paciente(1, "FRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona");

        $this->assertEquals(1, $paciente->getNumeroBeneficiario());
        $this->assertEquals("FRodrigo Faro", $paciente->getNome());
        $this->assertEquals("Rua", $paciente->getEndereco());
        $this->assertEquals("99999999", $paciente->getTelefone());
        $this->assertEquals("Hemorroida", $paciente->getDoencasPrevias());
        $this->assertEquals("Dipirona", $paciente->getMedioDeUsoContinuo());
    }

    public function testVerificarTrue(){
        $this->assertTrue(true);
    }

    public function testVerificarFalse(){
        $this->assertFalse(false);
    }

    public function testSettersAndGetters(){

        $paciente = new Paciente(1, "FRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona");

        $paciente->setNumeroBeneficiario(90233);
        $paciente->setNome('Falso');
        $paciente->setEndereco('Avenida');
        $paciente->setTelefone('88888888');
        $paciente->setDoencasPrevias('Enxaqueca');
        $paciente->setMedioDeUsoContinuo('Paracetamol');

        $this->assertEquals(90233, $paciente->getNumeroBeneficiario());
        $this->assertEquals('Falso', $paciente->getNome());
        $this->assertEquals('Avenida', $paciente->getEndereco());
        $this->assertEquals('88888888', $paciente->getTelefone());
        $this->assertEquals('Enxaqueca', $paciente->getDoencasPrevias());
        $this->assertEquals('Paracetamol', $paciente->getMedioDeUsoContinuo());
    }
}
