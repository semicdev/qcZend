<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Process\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Process\Model\Entity\Modelo;

class ListaController extends AbstractActionController
{
    
	private $modelo;
	public function __construct (){
		$this->modelo = new modelo();
	}

    public function indexAction()
    {	
    	$consulta=array();
        $elementos=array('nombreInterseccion'=> 1, 'horaInicioConteo'=> 1,'horaFinalConteo'=>1,'codificador'=> 1,'fechaCodificacion'=> 1);
    	$informacion = array('status'=>'empty');
    	$intersecciones = $this->modelo->find($consulta, $elementos); 	
    	
    	$tabla = $this->modelo->getTablaCodificadores($intersecciones);
    	return new viewModel(array('tabla' =>$tabla));
    }
    


}
