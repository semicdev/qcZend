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

class TrabajoController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }

    public function otroAction(){
    	return new ViewModel();
    }
    public function reciveparametrosAction(){
    	$saludo = "Mensaje para correr desnudo de felicidad";
    	return new ViewModel(array('saludo'=>$saludo, 'otro'=>"cualquier cosa"));
    }
     public function valoresurlAction(){
     	$id =$this->params()->fromRoute("id","No se pasaron parametros por la url");
    	$titulo = "Valores get por la url";
    	return new ViewModel(array('titulo'=>$id, 'id'=>$id));
    }

}
