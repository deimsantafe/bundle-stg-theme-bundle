<?php

namespace STG\ThemeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        // TODO: Implement getConfigTreeBuilder() method.
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('stg_theme');

        $rootNode
            ->children()
            ->arrayNode('datos_encabezado')
            ->isRequired()
            ->info('Complete los parametros del encabezado')
            ->children()
            ->scalarNode('title')
            ->scalarNode('entity')
            ->end()
            ->end()
            ->end();

        return $treeBuilder;
    }

}