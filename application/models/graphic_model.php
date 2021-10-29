<?php
class graphic_model{
	private $conexion;
	function __construct(){
		//Falta solucionar esto y encontrar la conexion en mi project

		//require_once('');
		//$this->conexion =  new post();
		$this->conexion->conectar();
	}
	function getDatosGrafico(){
		$sql = 'CONSULTA';
		$array = array();
		if ($consulta = $this->conexion->conexion->query($sql)) {
			while ($consulta_VU = mysqli_fetch_array($consulta)) {
				$arreglo[] = $consulta_VU;
			}
			return $arreglo;
			$this->conexion->cerrar();
		}
	}
}
?>
