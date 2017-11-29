<?php

namespace STG\ThemeBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

class STGThemeExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        // TODO: Implement load() method.
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        if (!isset($config['title'])) {
            $config['title'] = 'Titulo de la aplicación';
        }

        if (!isset($config['Entity'])) {
            $config['title'] = 'Organismo que expone el servicio';
        }

        $container->setParameter('stg_theme.datos_encabezado.title', $config['title']);
        $container->setParameter('stg_theme.datos_encabezado.entity', $config['entity']);

    }

}