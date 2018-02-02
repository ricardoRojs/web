<?php

/**
* Modulos GIS-SAC
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
	* Obtenemos información general
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

    /**
     * Obtenemos información de las marcas y modulos
     */
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

    /**
     * Obtenemos información de los clientes
     */
    public function getCliente($pais){
        $modulo = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "SELECT * FROM gis_clientes WHERE pais=:pais";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':pais', $pais);
        $statement->execute();

        while ($filas = $statement->fetch(PDO::FETCH_ASSOC)) {
            $modulo[] = $filas;
        }
        return $modulo;
        mysqli_close($conexion);
    }

    /**
     * Guardamos todas los formularios enviados
     */
    public function clienteForm($datos){
        $modulo = null;
        $modelo = new Conexion();
        $conexion = $modelo->getConexion();

        $sql = "INSERT INTO  gis_clientes_consultas (id, producto, motivo, empresa, nombre, apellido, correo, celular, pais, ciudad, mensaje, fecha)
                VALUES('', :producto, :motivo, :empresa, :nombre, :apellido, :correo, :celular, :pais, :ciudad, :mensaje, NOW())";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':producto', $datos['producto']);
        $statement->bindParam(':motivo',$datos['motivo']);
        $statement->bindParam(':empresa', $datos['empresa']);
        $statement->bindParam(':nombre',$datos['nombre']);
        $statement->bindParam(':apellido', $datos['apellido']);
        $statement->bindParam(':correo',$datos['correo']);
        $statement->bindParam(':celular', $datos['celular']);
        $statement->bindParam(':pais',$datos['pais']);
        $statement->bindParam(':ciudad', $datos['ciudad']);
        $statement->bindParam(':mensaje',$datos['mensaje']);

        if(!$statement){
            //No se pudo registar los datos
            $modulo = false;
            return $modulo;
        }else{
            $statement->execute();
            $modulo = true;
            return $modulo;
        }

        mysqli_close($conexion);
    }
}
?>