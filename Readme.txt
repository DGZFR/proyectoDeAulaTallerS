para hacer los unit test, se hizo uso de dos herramientas 
simple test y phpunit 


con el fin de probar el inicio de sesion se hizo uso de simple test en el cual luego 
de crear la logica de conexion con la base de datos se creo un archivo llamado 
logintest.php  en el cual se hace referencia al archivo autorun de simpletest y 
ala ubicacion de al archivo db.php que nuestro puente con la base de datos mysql 
al crear la clase logintest esta tiene que extender de UnitTestCase 
para poder llamar a simple test dentro de la funcion testuno 

hacemos uso de un asserequals al cual le pasamos dos parametros conexion el 
cual es un objeto en la funcion login  y le envio como parametro  un usuario y contraseña

y espero que sea nulo es decir que la base de datos diga que no existe la informacion ingresada

en el segundo caso con un id correcto no debe fallar  debe pasar la prueba diciendo que la informacion es correcta



en  phpunit se probo validaciones de campos entre ellos validar que la informacion 
ingresada por el usuario sea valida y comparar entre si es posible que el usuario 
ingrese informacion con cambios 
