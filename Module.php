<?php
namespace AssetManager;

class Module
{
    public function onBootstrap()
    {
        if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
        define ('CF_MODULE', dirname(dirname(__file__)));
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
