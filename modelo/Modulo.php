<?php

/**
* Integrador 
*/
class Modulo{
    
	/**
	* Obtenemos información de solarwinds
	*/
	public function getSolarwinds($id){

		$modulo = null;
		$modelo = new Conexion();
		$conexion = $modelo->getConexion();

		$sql = "SELECT * FROM gis_portal WHERE id=:id";
		$statement = $conexion->prepare($sql);
		$statement->bindParam(':id', $id);
		$statement->execute();

		if(!$statement){
			return "No hay datos";
		}else{
			$filas = $statement->fetch(PDO::FETCH_ASSOC);
			$modulo = $filas;
			return $modulo;
		}
		mysqli_close($conexion);

	}
    
    /**
	* Obtenemos información de Iboss
	*/
	public function getIboss($id){

		$modulo = null;
		$modelo = new Conexion();
		$conexion = $modelo->getConexion();

		$sql = "SELECT * FROM gis_iboss WHERE id=:id";
		$statement = $conexion->prepare($sql);
		$statement->bindParam(':id', $id);
		$statement->execute();

		if(!$statement){
			return "No hay datos";
		}else{
			$filas = $statement->fetch(PDO::FETCH_ASSOC);
			$modulo = $filas;
			return $modulo;
		}
		mysqli_close($conexion);

	}
    
    /**
	* Obtenemos información de varonis
	*/
	public function getVaronis($id){

		$modulo = null;
		$modelo = new Conexion();
		$conexion = $modelo->getConexion();

		$sql = "SELECT * FROM gis_portal WHERE id=:id";
		$statement = $conexion->prepare($sql);
		$statement->bindParam(':id', $id);
		$statement->execute();

		if(!$statement){
			return "No hay datos";
		}else{
			$filas = $statement->fetch(PDO::FETCH_ASSOC);
			$modulo = $filas;
			return $modulo;
		}
		mysqli_close($conexion);

	}
    
    /**
	* Obtenemos información
	*/
	public function getBussines($id){

		$modulo = null;
		$modelo = new Conexion();
		$conexion = $modelo->getConexion();

		$sql = "SELECT * FROM gis_inf WHERE id=:id";
		$statement = $conexion->prepare($sql);
		$statement->bindParam(':id', $id);
		$statement->execute();

		if(!$statement){
			return "No hay datos";
		}else{
			$filas = $statement->fetch(PDO::FETCH_ASSOC);
			$modulo = $filas;
			return $modulo;
		}
		mysqli_close($conexion);

	}

	public function getModulo($marca){
        $modulo = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "SELECT * FROM gis_modulos WHERE marca=:marca";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':marca', $marca);
        $statement->execute();

        while ($filas = $statement->fetch(PDO::FETCH_ASSOC)) {
            $modulo[] = $filas;
        }
        return $modulo;
        mysqli_close($conexion);
    }
}
?>