<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function holaAction()
    {	
    	//conexion a base de datos
    	//traer todos los archivos de tabla carreteras
    	//array = resultado

    	$tabla = 
    	"<table class='table'>
  	<tr><td>sdf</td><td>poip</td></tr>
  	<tr><td>dgf</td><td>jk</td></tr>
  	<tr><td>fgh</td><td>hjkj</td></tr>
  	<tr><td>ghj</td><td>hjkhjk</td></tr>
  </table>";
  	$json="{valores:[2,4,56,8,0]}";
    	return new ViewModel(array("texto"=>$tabla, "texto2"=>$json));
    }
}
