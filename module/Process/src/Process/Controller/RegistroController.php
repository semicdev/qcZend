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
use Process\Model\Entity\modeloregistro;

class RegistroController extends AbstractActionController
{	
    public function indexAction()
    {	
    	// VARIABLES DEL SISTEMA
 		$directorioMedia = "C:\wamp\www\QualityCounts\Media";
 		$rutaAuxiliar = "";
		// instancia de classe LeerCarpeta
		
    	$carpeta = new Modeloregistro($directorioMedia);
    	$res = $carpeta -> AbrirCarpeta();// abrir carpeta default
    	$dir = json_encode($res,true);
    	//var_dump($dir);
        return new viewModel(array('listaDirectorios'=>$dir,'directorioMedia'=>$directorioMedia));
    }

    public function usuarioAction()
    {
        return new viewModel();
    }


}
