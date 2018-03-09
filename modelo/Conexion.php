<?php 
/**
* Conexion al la base de datos MySQL.
*/
class Conexion {
	
	public function getConexion(){

		$servidor = "localhost";
		$base_datos = "gissac_customers";
		$usuario = "root";    //"gissac_des";
		$pass = "";           //"gissac_des";

		try{
			$conexion = new PDO("mysql:host=$servidor; dbname=$base_datos;" ,$usuario, $pass); // Instanciamos el PDO
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET UTF8");

		}catch(Exception $e){
			die("Error ". $e->getMessage());
			echo "Error en la linea ". $e->getLine();
		}
		return $conexion;
	}
}        
?>