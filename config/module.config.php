<?php
return array(
    'asset-manager' => array(
        'default' => dirname(__DIR__) . '/src/AssetManager/Assets',
    ),
    'router' => array(
        'routes' => array(
            'assets' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/[:module]/assets/[:type[/:file]]',
                    'constraints' => array(
                        'type'     => '[a-zA-Z0-9_-]*',
                        'file'     => '[a-zA-Z0-9/._-]*',
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'AssetManager\Controller',
                        'controller'    => 'Assets',
                        'action'        => 'render',
                        'module'        => 'default',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
