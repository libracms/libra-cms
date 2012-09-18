<?php
return array(
    'router' => array(
        'routes' => array(
            'my-module' => array(
                'type'    => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route'    => '/my-module/[:controller[/:action]]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'module'     => 'my-module',
                        'controller' => 'index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'admin' => array(
                'child_routes' => array(
                    'my-module' => array(
                        'type'    => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route'    => '/my-module/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                                'module'     => 'my-module',
                                'controller' => 'index',
                                'action'     => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'query' => array(
                                'type' => 'Query',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'my-module/index'           => 'MyModule\\Controller\\IndexController',
            'my-module/admin-index'             => 'MyModule\\Controller\\AdminIndexController',  //for 2 tabs far for admin controllers
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
