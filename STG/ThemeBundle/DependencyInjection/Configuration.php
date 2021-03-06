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
                ->arrayNode('configuration')
                    ->isRequired()
                    ->info('Complete los parametros requeridos')
                    ->children()
                        ->scalarNode('offline')
                        ->end()
                        ->scalarNode('materialize')
                        ->end()    
            ->end()
                ->end()
                    ->end();

        return $treeBuilder;
    }

}