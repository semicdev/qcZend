<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Process\Controller\Index' => 'Process\Controller\IndexController',
            'Process\Controller\Lista' => 'Process\Controller\ListaController',
            'Process\Controller\Registro' => 'Process\Controller\RegistroController',
            'Process\Controller\Captura' => 'Process\Controller\CapturaController',
            'Process\Controller\Reportes' => 'Process\Controller\ReportesController'
        ),
    ),
    'router'=>array(
        'routes'=>array(
            //establecemos el home
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        //HOME = la lista de intersecciones mientras hacemos una Presentacion
                        'controller' => 'Process\Controller\Lista',
                        'action'     => 'index',
                    ),
                ),
            ),
            //declaramos tipos de ruta para Process
            'lista'=>array(
                 'type'=>'Literal',
                    'options'=>array(                     
                        'route' => '/lista',
                        'constraints' => array(
                                'action'  =>  '[a-zA-Z][a-zA-Z0-9_-]*',
                        ),                       
                        'defaults'  =>  array(
                                //por default  veremos la lista de intersecciones
                                '__NAMESPACE__' => 'Process\Controller',
                                'controller'    => 'Lista',
                                'action'        => 'index'
                        
                        ),
                    ),
           ),
            // delcaramos la ruta para los registros
            'registro'=>array(
                 'type'=>'Literal',
                    'options'=>array(                     
                        'route' => '/registro',
                        'constraints' => array(
                                'action'  =>  '[a-zA-Z][a-zA-Z0-9_-]*',
                        ),                       
                        'defaults'  =>  array(
                                //por default  veremos la lista de intersecciones
                                '__NAMESPACE__' => 'Process\Controller',
                                'controller'    => 'Registro',
                                'action'        => 'index'
                        
                        ),
                    ),
                    //Declaracion de una ruta hija para el registro
                  'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*'
                            ),
                            'defaults' => array(
                               /* '__NAMESPACE__'=> 'Application\Controller',
                                'controller' => 'Trabajo',
                                'action' => 'index',  */
                            ),
                        ),
                    ),
                ),
           ),
            // delcaramos la ruta para la captura de la codificacion
            'captura'=>array(
                 'type'=>'Literal',
                    'options'=>array(                     
                        'route' => '/captura',
                        'constraints' => array(
                                'action'  =>  '[a-zA-Z][a-zA-Z0-9_-]*',
                        ),                       
                        'defaults'  =>  array(
                                //por default  veremos la lista de intersecciones
                                '__NAMESPACE__' => 'Process\Controller',
                                'controller'    => 'Captura',
                                'action'        => 'index'
                        
                        ),
                    ),
           ),
            // delcaramos la ruta para la captura de la codificacion
            'reportes'=>array(
                 'type'=>'Literal',
                    'options'=>array(                     
                        'route' => '/reportes',
                        'constraints' => array(
                                'action'  =>  '[a-zA-Z][a-zA-Z0-9_-]*',
                        ),                       
                        'defaults'  =>  array(
                                //por default  veremos la lista de intersecciones
                                '__NAMESPACE__' => 'Process\Controller',
                                'controller'    => 'Reportes',
                                'action'        => 'index'
                        
                        ),
                    ),
           ),                       
       ),
    ),
    //Cargamos el view manager
   'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'process/index/index' => __DIR__ . '/../view/process/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
          'process' =>  __DIR__ . '/../view',
        ),
    ),
);
