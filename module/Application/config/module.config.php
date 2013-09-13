<?php
return array(
    'router' => array(
        'routes' => array(
            'application' => array(
                'type'    => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route'    => '/application[/:controller[/:action]]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller' => 'Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'admin' => array(
                'child_routes' => array(
                    'application' => array(
                        'type'    => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route'    => '/application[/:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                                '__NAMESPACE__' => 'Application\Controller',
                                'controller' => 'AdminIndex',
                                'action'     => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index'          => 'Application\Controller\IndexController',
            'Application\Controller\AdminIndex'             => 'Application\Controller\AdminIndexController',  //for 2 tabs far for admin controllers
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'template_map' => array(
            'layout/layouttwb-demo' => __DIR__ . '/../view/layout/layouttwb-demo.phtml',
        ),
    ),
    'translator' => array(
        'locale' => array(
            'en-US',
        ),
        'translation_file_patterns' => array(
            array(
                'type'        => 'phparray',
                'base_dir'    => __DIR__ . '/../locale',
                'text_domain' => 'default',
                'pattern'     => '%s.php',
            ),
        ),
    ),
);
