<?php
    include_once('simpletest/autorun.php');
 
    include_once('models/db.php');


    class loginTest extends UnitTestCase{

        public function testUno (){
		$conn = new connection();
		
       /* caso de prueba en el cual  esperamos que la base de datos me diga que no existe la informacion ingresada
	   $this->assertEqual($conn->login('dub','5656'), null); */
			
	/* caso de prueba en el cual  esperamos que sea exitoso el ingreso  ingresando informacion correcta fallaria sin no fuera correcto */   
	 $this->assertEqual($conn->login('Duban','1234'), 1); 
		
        }

    }
?>