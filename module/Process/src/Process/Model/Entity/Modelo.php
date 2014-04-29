<?php 


namespace Process\Model\Entity;
use mongoclient;
// nombre de nuestro modelo

class Modelo
{
	private $texto;
	private $conexion;
	private $coleccion;
	private $b;

	public function __construct()
	{
		$this->conexion = new MongoClient("JAYROSERVER-PC");
		$this->coleccion = $this->conexion->QualityCounts->intersecciones;
	}

	public function getTexto()
	{
		return $this->texto;
	}
	//traer una sola carretera
	public function findOne(){
		return	$this->coleccion->findOne();	
	}
	//traer una sola carretera
	public function getInterseccion($consulta){
		return	$this->coleccion->findOne($consulta);	
	}
	//traer una sola carretera
	public function find($consulta= array(), $elementos= array('_id'=>1)){

		return	$this->coleccion->find($consulta, $elementos);	
	}
	//cerrar base de datos
	public function close(){
		return	$this->conexion->close();	
	}

	// mapeo de lista
	public function getListaCodificadores($resultObj){

		/* devolvemos una lista de usuarios*/		
	   $info = iterator_to_array($resultObj, true);
       $b= array_map(function ($n){
             return "<li>".$n['codificador']."</li>";
	       }, $info);
       return $b;
	}

	// mapeo de Tabla
	public function getTablaCodificadores($resultObj){

		/* devolvemos una lista de usuarios*/		
	   $info = iterator_to_array($resultObj, true);
       $b= array_map(function ($n){
             return "<tr><td>".$n['nombreInterseccion']."</td><td>".$n['horaInicioConteo']."</td><td>".$n['horaFinalConteo']."</td><td>".$n['codificador']."</td><td>Captura</td><td>Reporte</td><td>Editar</td><td>Elimiar</td><td></td></tr>";
	       }, $info);
       return $b;
	}
	  
	

}