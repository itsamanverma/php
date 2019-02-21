<?php

namespace WorkerBundle\DependencyInjection;

use Codeignitor\Component\DependencyInjection\Loader\YamlFileLoader;
use Codeignitor\Component\Config\FileLocator;
use Codeignitor\Component\HttpKernel\DependencyInjection\Extension;
use Codeignitor\Component\DependencyInjection\ContainerBuilder;

class WorkerExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
    }
}

