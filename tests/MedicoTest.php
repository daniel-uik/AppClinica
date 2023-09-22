<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Medico;

    class MedicoTest extends TestCase
    {
        
        //Verificações dos Valores
        
        public function testMedicoCRM(){
            $p1 = new Medico(1, "Rodrigo Faro", "99999999", "Rua");

            $this->assertEquals(1, $p1->getCRM());
        }

        public function testMedicoNome(){
            $p2 = new Medico(1, "Rodrigo Faro", "99999999", "Rua");
            
            $this->assertEquals("Rodrigo Faro", $p2->getNome());
        }

        public function testMedicoTelefone(){
            $p3 = new Medico(1, "Rodrigo Faro", "99999999", "Rua");
            
            $this->assertEquals("99999999", $p3->getTelefone());
        }

        public function testMedicoEndereco(){
            $p4 = new Medico(1, "Rodrigo Faro", "99999999", "Rua");
            
            $this->assertEquals("Rua", $p4->getEndereco());
        }


        //Verificações

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }


        //Coloca os Valores nas funções

        public function testSetCRM(){
            $p1 = new Medico(1, "Rodrigo Faro", "99999999", "Rua");
            $p1->setCRM(1);
            $this->assertEquals(1, $p1->getCRM());
        }

        public function testSetNome()
        {
            $p2 = new Medico(1, "Rodrigo Faro", "99999999", "Rua");
            $p2->setNome('cel');
            $this->assertEquals("cel", $p2->getNome());
        }

        public function testSetTelefone(){
            $p3 = new Medico(1, "Rodrigo Faro", "99999999", "Rua");
            $p3->setTelefone('99999999');
            $this->assertEquals('99999999', $p3->getTelefone());
        }

        public function testSetEndereco()
        {
            $p4 = new Medico(1, "Rodrigo Faro", "99999999", "Rua");
            $p4->setEndereco('Rua');
            $this->assertEquals("Rua", $p4->getEndereco());
        }
    }
?>

