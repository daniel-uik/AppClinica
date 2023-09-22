<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Paciente;

   

    class PacienteTest extends TestCase
    {
        
        public function testPacienteNumeroBeneficiario()
        {
            $p1 = new Paciente(1, "FFRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona" );

            $this->assertEquals(1, $p1->getNumeroBeneficiario());
        }

        public function testPacienteNome(){
            $p2 = new Paciente(1, "FRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona" );
            
            $this->assertEquals("FRodrigo Faro", $p2->getNome());
        }

        public function testPacienteEndereco()
        {
            $p3 = new Paciente(1, "FRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona" );

            $this->assertEquals("Rua", $p3->getEndereco());
        }

        public function testPacienteTelefone(){
            $p4 = new Paciente(1, "FRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona" );
            
            $this->assertEquals("99999999", $p4->getTelefone());
        }

        public function testPacienteDoencasPrevias()
        {
            $p5 = new Paciente(1, "FRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona" );

            $this->assertEquals("Hemorroida", $p5->getDoencasPrevias());
        }

        public function testPacienteMedioDeUsoContinuo(){
            $p6 = new Paciente(1, "FRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona" );
            
            $this->assertEquals("Dipirona", $p6->getMedioDeUsoContinuo());
        }

        //Verificações

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }


        //Configurar os valores

        public function testSetNumeroBeneficiario(){
            $p1 = new Paciente(1, "FRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona" );
            $p1->setNumeroBeneficiario(1);
            $this->assertEquals(1, $p1->getNumeroBeneficiario());
        }

        public function testSetNome()
        {
            $p2 = new Paciente(1, "FRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona" );
            $p2->setNome('FRodrigo Faro');
            $this->assertEquals("FRodrigo Faro", $p2->getNome());
        }

        public function testSetEndereco(){
            $p3 = new Paciente(1, "FRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona" );
            $p3->setEndereco("Rua");
            $this->assertEquals(10.00, $p3->getEndereco());
        }

        public function testSetTelefone()
        {
            $p4 = new Paciente(1, "FRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona" );
            $p4->setTelefone('99999999');
            $this->assertEquals("99999999", $p4->getTelefone());
        }

        public function testSetDoencasPrevias(){
            $p5 = new Paciente(1, "FRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona" );
            $p5->setDoencasPrevias("Hemorroida");
            $this->assertEquals("Hemorroida", $p5->getDoencaPrevias());
        }

        public function testSetMedioDeUsoContinuo()
        {
            $p6 = new Paciente(1, "FRodrigo Faro", "Rua", "99999999", "Hemorroida", "Dipirona" );
            $p6->setMedioDeUsoContinuo('Dipirona');
            $this->assertEquals("Dipirona", $p6->getMedioDeUsoContinuo());
        }
    }
?>

