<?php 

namespace Process\Model\Entity;

class Modeloregistro
{
    private $_ruta,$_contenido,$_rutaAux;  
	function __construct($ruta = "./")
	{
		# inciciamos con una ruta principal
	 $this -> _ruta = $ruta; 
	}

	/* OBTENER RUTA */
	public function getRuta(){
	   return  $this -> _ruta; 
	}

	/* OBTENER CONTENIDO */
	public function getContenido(){
	   return  $this -> _contenido; 
	}


	/* LEER CARPETA */
    public function AbrirCarpeta($interior = ""){
    	if($interior == ""){
    		$dir = $this -> _ruta;	
    	}else{
    		$dir = $interior;	
    	};

    	
    	$opDir = opendir($dir);    //Abrimos el directorio
        $contenido = array();
		while ($arc = readdir($opDir)) {   //Leemos el arreglo de archivos contenidos en el directorio: readdir recibe como parametro el directorio abierto
			if($arc != '..' && $arc !='.' && $arc !=''){
   					//array_push($contenido, $arc); // lo mostramos en panatalla solo si es una carpeta
				//si hubo un contenido mostrarlo			
				$contenido[$arc] = $this -> showContenido($dir , $arc);
			}
		}
		$this -> _contenido = $contenido;
		closedir($opDir);         //Cerramos el directorio
		clearstatcache();     //Limpia la caché de estado de un archivo

		if(sizeof($contenido)!=0){   	
    	//devolver el contenido solo si el arreglo contiende datos
    	return $contenido;
    	}
    
    }//fin funcion Abrir

    public function showContenido($interior, $elemento){
      $dataArray;  
      
        if(is_dir($interior."/".$elemento)){
       		# para cada carpeta encontrada hacer buscar dontro de ella
       		//si es un directorio
       		// si se encuentra una carpeta abrirla 
       		$dataArray = $this -> AbrirCarpeta($interior."/".$elemento);
        }else{
            // si es un archivo solo tomar el nombre de el elemento
            $dataArray = $elemento;
        }
     return $dataArray;
    
    }






}//fin de  classe



 ?>