<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use app\libraries\Agendamento;

class AgendamentoTest extends TestCase{

    public function testAgendamento(){
        
        $agendamento = new Agendamento(1, "2023-09-23", "14:30", "Dor de cabeça", "Média");

        $this->assertEquals(1, $agendamento->getNumeroAgendamento());
        $this->assertEquals("2023-09-23", $agendamento->getData());
        $this->assertEquals("14:30", $agendamento->getHora());
        $this->assertEquals("Dor de cabeça", $agendamento->getQueixa());
        $this->assertEquals("Média", $agendamento->getGravidade());
    }

    public function testVerificarTrue(){
        $this->assertTrue(true);
    }

    public function testVerificarFalse(){
        $this->assertFalse(false);
    }

    public function testSettersAndGetters(){
        
        $agendamento = new Agendamento(1, "2023-09-23", "14:30", "Dor de cabeça", "Média");

        $agendamento->setNumeroAgendamento(932123);
        $agendamento->setData("2023-09-24");
        $agendamento->setHora("15:00");
        $agendamento->setQueixa("Enjoo");
        $agendamento->setGravidade("Baixa");

        $this->assertEquals(932123, $agendamento->getNumeroAgendamento());
        $this->assertEquals("2023-09-24", $agendamento->getData());
        $this->assertEquals("15:00", $agendamento->getHora());
        $this->assertEquals("Enjoo", $agendamento->getQueixa());
        $this->assertEquals("Baixa", $agendamento->getGravidade());
    }
}
