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

        $rootNode->children()->arrayNode('datosEncabezado')->isRequired()->info(
            'Complete los parametros del encabezado'
        )->children()->scalarNode('title')->end()->scalarNode('entity')->end;

        return $treeBuilder;

    }

}