<?php

namespace STG\ThemeBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;


class GlobalDataExtension extends \Twig_Extension
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getGlobals()
    {
        return array(
            'configuration_offline' => $this->container->getParameter('configuration_offline'),
        );
    }

    public function getName()
    {
        return 'global_data_extension';
    }
}
